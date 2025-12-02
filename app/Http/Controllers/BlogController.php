<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function main_blog(Request $request)
    {
        
        $all_blogs = Blog::all();
        dd($request);

        
        // $insert = new Blog();
        // $insert->titile_m = 'اولین وبلاگ';
        // $insert->m_par = 'اولین تیتر';
        // $insert->titile_1 = 'دومین تیتر';
        // $insert->pr_1 = "اولین پاراگراف";
        // $insert->titile_2 = 'دومین تیتر';
        // $insert->pr_2 = "دومین پاراگراف";
        // $insert->category = 'دسته اول';
        // $insert->label = 'لیبل 1';
        // $insert->aouther = 'ارش';
        // $insert->save();
        
        

       
        return view('weblog', ['blogs' => $all_blogs]);
    }
}