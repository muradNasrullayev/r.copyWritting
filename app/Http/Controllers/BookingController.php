<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
