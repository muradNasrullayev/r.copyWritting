<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeLineController extends Controller
{
    public function timeline()
    {
        return view('web.timeline');
    }
}
