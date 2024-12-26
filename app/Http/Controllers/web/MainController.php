<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Capabilities;
use App\Models\Introduction;
use App\Models\Testimonials;
use App\Models\WelcomePage;
use App\Models\WhyChooseUs;

class MainController extends Controller
{
    public function index()
    {
        $introductions = Introduction::query()->first();
        $welcome=WelcomePage::query()->select('*')->first();
        $capabilities=Capabilities::query()->get();
        $testimonials=Testimonials::query()->get();
        $whyChooseUss=WhyChooseUs::query()->get();
        return view('web.index',compact('introductions',
            'welcome',
            'capabilities',
            'testimonials',
            'whyChooseUss'));
    }
}
