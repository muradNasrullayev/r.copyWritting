<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function booking()
    {
        return view('web.booking');
    }

    public function blogs()
    {
        return view('web.blogs');
    }
}
