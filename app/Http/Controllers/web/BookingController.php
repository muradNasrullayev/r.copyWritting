<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use http\Params;

class BookingController extends Controller
{
       public function booking()
    {
        return view('web.booking');
    }

}
