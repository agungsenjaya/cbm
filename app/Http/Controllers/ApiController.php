<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ApiController extends Controller
{
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
}
