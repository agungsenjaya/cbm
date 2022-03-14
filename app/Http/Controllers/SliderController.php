<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Hash,DB,Session,Validator,Auth, Str;

class SliderController extends Controller
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
        return view('admin.slider.index')->with('slider', Slider::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'img_web' => 'required|mimes:jpg,bmp,png',
            'img_mobile' => 'required|mimes:jpg,bmp,png',
            'title' => 'required',
            'link' => 'required'
        ]);
        if ($valid->fails()) {
            Session::flash('failed','Terjadi kesalahan saat memasukan data');
            return redirect()->back()
                        ->withErrors($valid)
                        ->withInput();
        }else{

            $img_web = $request->img_web;
            $img_web_new = time().($img_web->getClientOriginalName());
            $img_web->move('upload/slider', strtolower($img_web_new));

            $img_mobile = $request->img_mobile;
            $img_mobile_new = time().($img_mobile->getClientOriginalName());
            $img_mobile->move('upload/slider', strtolower($img_mobile_new));

            $data = Slider::create([
                'img_web' => 'upload/slider/' . strtolower($img_web_new),
                'user_id' => Auth::user()->id,
                'img_mobile' => 'upload/slider/' . strtolower($img_mobile_new),
                'content' => $request->content,
                'link' => $request->link,
                'title' => strtolower($request->title),
                'slug' => Str::slug(strtolower($request->title)),
            ]);

            if ($data) {
                Session::flash('success','Data berhasil dimasukan kedalam database');
                return redirect()->route('sliders.index');
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
        $data = Slider::find($id);
        return view('admin.slider.edit',compact('data'));
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
        $data = Slider::find($id);
        $valid = Validator::make($request->all(),[
            'title' => 'required',
            'link' => 'required',
            'status' => 'required',
        ]);
        if ($valid->fails()) {
            Session::flash('failed','Terjadi kesalahan saat memasukan data');
            return redirect()->back()
                        ->withErrors($valid)
                        ->withInput();
        }else{

            if ($request->hasFile('img_web')) {
                $img_web = $request->img_web;
                $img_web_new = time(). $img_web->getClientOriginalName();
                $img_web->move('upload/slider', strtolower($img_web_new));
                $data->img_web = 'upload/slider/' . strtolower($img_web_new);
            }
            
            if ($request->hasFile('img_mobile')) {
                $img_mobile = $request->img_mobile;
                $img_mobile_new = time(). $img_mobile->getClientOriginalName();
                $img_mobile->move('upload/slider', strtolower($img_mobile_new));
                $data->img_mobile = 'upload/slider/' . strtolower($img_mobile_new);
            }

            $data->title = strtolower($request->title);
            $data->slug = Str::slug(strtolower($request->title));
            $data->link = $request->link;
            $data->content = $request->content;
            $data->status = $request->status;
            $data->save();

            if ($data) {
                Session::flash('success','Data berhasil diupdate kedalam database');
                return redirect()->route('sliders.index');
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
        $data = Slider::find($id);
        $data->delete();
        if ($data) {
            Session::flash('success','Data berhasil dihapus pada database');
            return redirect()->route('sliders.index');
        }
    }
}
