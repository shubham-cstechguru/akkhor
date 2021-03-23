<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRequest;
use App\Models\Request;
use App\Models\Setting;

class RequestController extends Controller
{
    public function create() {
        $setting = Setting::first();
        return view('frontend.inc.request-demo', compact('setting'));
    }
    public function store(RequestRequest $request) {
    
        $req = new Request();
        $req->name = $request->name;
        $req->email = $request->email;
        $req->company = $request->company;
        $req->phoneno = $request->phoneno;
        $req->designation = $request->designation;
        $req->test = $request->test;
        $req->daysToFinalize = $request->daysToFinalize;
        $req->requestedUrl = $request->requestedUrl;
        $req->message = $request->message;
        $req->save();

        return back()->with("status", "your Message Send Sucessfully! Thank You");
    }
}
