<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Hash,DB,Session,Validator,Auth, Str;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.brand.index')->with('brand', Brand::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(),[
            'title' => 'required|unique:brands',
            'img' => 'required|mimes:jpg,bmp,png',
        ]);
        if ($valid->fails()) {
            Session::flash('failed','Terjadi kesalahn saat memasukan data');
            return redirect()->back()
                        ->withErrors($valid)
                        ->withInput();
        }else{
            $img = $request->img;
            $img_new = time().($img->getClientOriginalName());
            $img->move('upload/brand', strtolower($img_new));


            $data = Brand::create([
                'user_id' => Auth::user()->id,
                'title' => strtolower($request->title),
                'img' => 'upload/brand/' . strtolower($img_new),
                'slug' => Str::slug(strtolower($request->title))
            ]);
            if ($data) {
                Session::flash('success','Data berhasil dimasukan kedalam database');
                return redirect()->route('brands.index');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Brand::find($id);
        return view('admin.brand.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Brand::find($id);
        $valid = Validator::make($request->all(),[
            'title' => 'required',
        ]);
        if ($valid->fails()) {
            Session::flash('failed','Terjadi kesalahn saat memasukan data');
            return redirect()->back()
                        ->withErrors($valid)
                        ->withInput();
        }else{
            
            if ($request->hasFile('img')) {
                $img = $request->img;
                $img_new = time(). $img->getClientOriginalName();
                $img->move('upload/brand', strtolower($img_new));
                $data->img = 'upload/brand/' . strtolower($img_new);
            }

            $data->title = strtolower($request->title);
            $data->slug = Str::slug(strtolower($request->title));
            $data->save();

            if ($data) {
                Session::flash('success','Data berhasil diupdate kedalam database');
                return redirect()->route('brands.index');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Brand::find($id);
        $data->delete();
        if ($data) {
            Session::flash('success','Data berhasil dihapus pada database');
            return redirect()->route('brands.index');
        }
    }
}
