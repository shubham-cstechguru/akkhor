<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index() {
        $testimonial = Testimonial::get();
        $setting = Setting::first();
        $data = compact('testimonial', 'setting');
        return view('frontend.inc.testimonial', $data);
    }
}
