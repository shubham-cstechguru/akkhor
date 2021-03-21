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
        $request = new Request();
        $request->name = $request->name;
        $request->email = $request->email;
        $request->company = $request->company;
        $request->phoneno = $request->phoneno;
        $request->designation = $request->designation;
        $request->test = $request->test;
        $request->daysToFinalize = $request->daysToFinalize;
        $request->requestedUrl = $request->requestedUrl;
        $request->message = $request->message;
        $request->save();

        return redirect(route('home.request'));
    }
}
