<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\Setting;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index() {
        $setting = Setting::first();
        $pricing = Pricing::get()->toArray();
        return view('frontend.inc.pricing', compact('pricing', 'setting'));
    }
}
