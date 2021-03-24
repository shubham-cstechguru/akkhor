<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $service = Service::get();
        $setting = Setting::first();
        return view('frontend.inc.pages', compact('service', 'setting'));
    }
}
