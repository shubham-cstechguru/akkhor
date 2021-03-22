<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRequest;
use App\Models\Request;

class RequestController extends Controller
{
    public function create() {
        return view('frontend.inc.request-demo');
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
