<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index() {
        $pricing = Pricing::get()->toArray();
        return view('frontend.inc.pricing', compact('pricing'));
    }
}
