<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class TimeLineController extends Controller
{
    public function timeline()
    {
        return view('web.timeline');
    }
}
