<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $service = Service::get();
        $data = compact('service');
        return view('frontend.inc.index', $data);
    }
}
