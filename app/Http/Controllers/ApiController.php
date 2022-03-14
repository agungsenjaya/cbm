<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Hash,DB,Session,Validator,Auth, Str;

class ApiController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function project_search($a)
    {
        $data = Project::where('slug',$a)->first();
        if ($data) {
            return response()->json([
                'code' => 200, 
                'data' => $data
            ]);
        }
    }
    public function project_store(Request $request)
    {
        $no = 0;
        $valid = Validator::make($request->all(),[
            'title' => 'required|unique:projects',
            'img' => 'required|mimes:jpg,bmp,png',
            'kategori' => 'required',
        ]);
        if ($valid->fails()) {

            return response()->json([
                'code' => 300, 
                'data' => 'Failed upload project'
            ]);
            
        }else{

            $img = $request->img;
            $img_new = time().'.' . $img->getClientOriginalExtension();
            $img->move('upload/project', strtolower($img_new));

            if($request->hasfile('img_af'))
            {
                foreach($request->file('img_af') as $file)
                {
                    $imageName = $no++ . time().'.'. $file->getClientOriginalExtension();
                    $vale = $file->storeAs('upload/project', $imageName, 'public');
                    $after[] = '/storage/'.$vale;
                }
            }
            
            $data = Project::create([
                'title' => strtolower($request->title),
                'img' => 'upload/project/' . strtolower($img_new),
                'img_af' => ($request->hasfile('img_af')) ? json_encode($after) : '',
                'user_id' => $request->user_id,
                'kategori' => $request->kategori,
                'slug' => Str::slug(strtolower($request->title))
            ]);
            if ($data) {

                return response()->json([
                    'code' => 200, 
                    'data' => $data
                ]);
                
            }
        }

    }
}
