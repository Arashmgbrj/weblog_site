<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class Admin extends Controller
{
    public function Admin()
    { 
        $all = Blog::all();
        return view('admin',["data"=>$all]);


    }
    public function add(Request $request)

    
    {
        $validate = $request->validate([
            'm_title'=>"required",
            'm_pr'=>"required",
            'm_title1'=>"required",
            'm_pr1'=>"required",
            'm_title2'=>"required",
            'm_pr2'=>"required",
            'aout'=>'required',
            'category'=>'required',
            'label'=>'required',
            
        ]);
        
        return view('add');


    }
}
