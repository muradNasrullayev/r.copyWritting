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
        $carts = Cart::with('plan')->get();
        $advantages = Advantage::query()->where('cart_id',11)->get();
//        return $plans;
        $carts = $plans->map(function ($plan) {
            return $plan->cart;
        });
//        return $carts;



        return view('web.service', compact('plans', 'carts', 'advantages'));
    }
}
