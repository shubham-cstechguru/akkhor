<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $service = Service::get();
        $setting = Setting::first();
        $data = compact('service', 'setting');
        return view('frontend.inc.index', $data);
    }
}
