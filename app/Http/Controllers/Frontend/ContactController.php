<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Setting;

class ContactController extends Controller
{
    public function create()
    {
        $setting = Setting::first();
        return view('frontend.inc.contact', compact('setting'));
    }
    public function store(ContactRequest $request)
    {

        $req = new Contact();
        $req->name = $request->name;
        $req->email = $request->email;
        $req->phoneno = $request->phoneno;
        $req->message = $request->message;
        $req->save();

        return back()->with("status", "your Message Send Sucessfully! Thank You");
    }
}
