<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Blog;
use App\Contact;
use App\Brand;
use App\Slider;
use App\Mail\ContactMail;
use DB,Session,Uuid,Validator,Mail;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.home')->with('project', Project::all())->with('brand', Brand::all());
    }
    
    public function about()
    {
        return view('client.about')->with('brand', Brand::all());
    }
    
    public function service()
    {
        return view('client.service');
    }
    
    public function contact()
    {
        return view('client.contact');
    }

    public function contact_send(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        Mail::to('info@cbm.co.id')->send(new ContactMail($details));
        
        if (Mail::failures()) {
            // dd('berhasil kirim email');
        }else{
            $data = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);
            if ($data) {
                Session::flash('success','Pesan telah terkirim ke admin kami');
                return redirect()->route('contact');
            }
        }
    }
    
    public function blog()
    {
        return view('client.blog')->with('blog', Blog::all());
    }
    
    public function blog_view($id)
    {
        $data = Blog::where('slug', $id)->first();
        return view('client.blog_view',compact('data'));
    }
    
    public function project()
    {
        return view('client.project')->with('project', Project::all());
    }
    
    public function project_view($id)
    {
        $data = Project::where('slug', $id)->first();
        return view('client.project_view',compact('data'));
    }

    public function join()
    {
        return redirect()->to('404');
    }
}
