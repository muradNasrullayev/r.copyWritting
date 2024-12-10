<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blogs()
    {
        return view('web.blogs');
    }
}
