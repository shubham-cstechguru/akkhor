<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        $setting = Setting::first();
        return view('frontend.inc.contact', compact('setting'));
    }
    public function store(ContactRequest $request)
    {
        $setting = Setting::first();
        $s = "Contact Enquiry Mail from {$setting->title}";

        $req = new Contact();
        $req->name = $request->name;
        $req->email = $request->email;
        $req->phoneno = $request->phoneno;
        $req->message = $request->message;
        $req->save();

        Mail::send('frontend.mail.enquiry_mail', ['req' => $req, 's' => $setting], function ($message) use ($request, $s, $setting) {
			$message->to($request->email);
			$message->subject($s);
			$message->from(env('MAIL_USERNAME'), $setting->title);
		});

        Mail::send('frontend.mail.enquiry_mail_admin', ['req' => $req, 's' => $setting], function ($message) use ($request, $s, $setting) {
			$message->to($request->email);
			$message->subject($s);
			$message->from(env('MAIL_USERNAME'), $setting->title);
		});

        return back()->with("status", "your Message Send Sucessfully! Thank You");
    }
}
