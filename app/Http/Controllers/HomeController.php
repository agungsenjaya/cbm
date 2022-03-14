<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Slider;
use App\Blog;
use App\Brand;
use App\Contact;
use App\User;
use Hash,DB,Session,Validator,Auth, Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index')->with('project', Project::all())->with('blog',Blog::all())->with('contact', Contact::all())->with('brand', Brand::all());
    }

    public function mailist()
    {
        return view('admin.mailist')->with('contact', Contact::all());
    }

    public function account()
    {
        return view('admin.account');
    }

    public function account_update(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $valid = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'email'
        ]);
        if ($valid->fails()) {
            Session::flash('failed','Terjadi kesalahn saat memasukan data');
            return redirect()->back()
                        ->withErrors($valid)
                        ->withInput();
        }else{
            $data->name = $request->name;
            $data->email = $request->email;
            if ($request->password) {
                $pass = Validator::make($request->all(),[
                    'password' => 'required|confirmed'
                ]);
                if ($pass->fails()) {
                    Session::flash('failed','Terjadi kesalahn saat memasukan data');
                    return redirect()->back()
                                ->withErrors($pass)
                                ->withInput();
                }else{
                    $data->password = Hash::make($request->password);
                }
            }
            $data->save();
            if ($data) {
                Session::flash('success','Data berhasil diupdate pada database');
                return redirect()->route('account');
            }
        }

        
    }
}
