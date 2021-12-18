<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Hash,DB,Session,Validator,Auth, Str;

class ProjectController extends Controller
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
        return view('admin.project.index')->with('project', Project::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
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
            'title' => 'required|unique:projects',
            'img' => 'required|mimes:jpg,bmp,png',
            'kategori' => 'required',
            'content' => 'required'
        ]);
        if ($valid->fails()) {
            Session::flash('failed','Terjadi kesalahn saat memasukan data');
            return redirect()->route('projects.index')
                        ->withErrors($valid)
                        ->withInput();
        }else{

            $img = $request->img;
            $img_new = time().($img->getClientOriginalName());
            $img->move('upload/project', strtolower($img_new));

            $detail=$request->input('content');
            $dom = new \DomDocument();
            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
            $images = $dom->getElementsByTagName('img');
            foreach($images as $k => $img){
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= "/upload/project/" . time().$k.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
            $detail = $dom->saveHTML();

            $data = Project::create([
                'title' => strtolower($request->title),
                'img' => 'upload/project/' . strtolower($img_new),
                'user_id' => Auth::user()->id,
                'kategori' => $request->kategori,
                'content' => $detail,
                'slug' => Str::slug(strtolower($request->title))
            ]);
            if ($data) {
                Session::flash('success','Data berhasil dimasukan kedalam database');
                return redirect()->route('projects.index');
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
        $data = Project::find($id);
        return view('admin.project.edit',compact('data'));
    }

    /**
     * 
     *  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Project::find($id);
        $valid = Validator::make($request->all(),[
            'title' => 'required',
            'content' => 'required'
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
                $img->move('upload/project', strtolower($img_new));
                $data->img = 'upload/project/' . strtolower($img_new);
            }

            libxml_use_internal_errors(true);
            $detail=$request->input('content');
            $dom = new \DomDocument();
            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
            $images = $dom->getElementsByTagName('img');
            foreach($images as $k => $img){
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= "/upload/project/" . time().$k.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
            $detail = $dom->saveHTML();
                    

            $data->title = strtolower($request->title);
            $data->kategori = $request->kategori;
            $data->content = $detail;
            $data->slug = Str::slug(strtolower($request->title));
            $data->save();

            if ($data) {
                Session::flash('success','Data berhasil diupdate kedalam database');
                return redirect()->route('projects.index');
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
        $data = Project::find($id);
        $data->delete();
        if ($data) {
            Session::flash('success','Data berhasil dihapus pada database');
            return redirect()->route('projects.index');
        }
    }
}
