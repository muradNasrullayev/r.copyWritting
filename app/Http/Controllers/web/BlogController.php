<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blogs;

class BlogController extends Controller
{
    public function blogs()
    {
        $blogs_head =Blogs::find(1);
        $blogs = Blogs::query()->where('id',">",1)->get();
        return view('web.blogs',compact('blogs','blogs_head'));
    }
}
