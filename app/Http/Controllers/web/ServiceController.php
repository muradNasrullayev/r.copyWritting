<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Cart;
use App\Models\Plan;

class ServiceController extends Controller
{
    public function service()
    {
        $plans = Plan::with('cart')->get();
        return view('web.service', compact('plans'));
    }
}
