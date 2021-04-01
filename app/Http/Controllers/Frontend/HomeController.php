<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Service;
use App\Models\Setting;
use App\Models\School;
use Facade\FlareClient\Http\Client as HttpClient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $home = Home::first();
        $service = Service::get();
        $setting = Setting::first();
        $school = School::whereNotNull('logo')->get();
        $data = compact('service', 'setting', 'home', 'school');
        return view('frontend.inc.index', $data);
    }
}
