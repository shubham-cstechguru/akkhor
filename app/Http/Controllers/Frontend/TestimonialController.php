<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index() {
        $testimonial = Testimonial::get();
        $data = compact('testimonial');
        return view('frontend.inc.testimonial', $data);
    }
}
