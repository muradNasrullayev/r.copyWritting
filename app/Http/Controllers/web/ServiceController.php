<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function service()
    {
        return view('web.service');
    }
}
