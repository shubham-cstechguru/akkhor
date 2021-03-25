<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRequest;
use App\Models\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    public function create()
    {
        $setting = Setting::first();
        return view('frontend.inc.request-demo', compact('setting'));
    }
    public function store(RequestRequest $request)
    {
        $setting = Setting::first();
        $s = "Demo Enquiry Mail from {$setting->title}";

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

        Mail::send('frontend.mail.demo_mail', ['req' => $req, 's' => $setting], function ($message) use ($request, $s, $setting) {
            $message->to($request->email);
            $message->subject($s);
            $message->from(env('MAIL_USERNAME'), $setting->title);
        });

        Mail::send('frontend.mail.demo_mail_admin', ['req' => $req, 's' => $setting], function ($message) use ($request, $s, $setting) {
            $message->to($request->email);
            $message->subject($s);
            $message->from(env('MAIL_USERNAME'), $setting->title);
        });

        $senderId = "SCHERP";

        $message  = urlencode("Your Demo Enquiry Send Sucessfull to ". $setting->title ." ");
        $smsApiUrl = str_replace(["[SENDER]", "[MOBILE]", "[MESSAGE]"], [$senderId, $req->phoneno, $message], $setting->sms_api);
        $sms = file_get_contents($smsApiUrl);

        $message  = urlencode("You Recieved Demo Enquiry from ". $req->name ." & Contact Number is". $req->phoneno. " ");
        $smsApiUrl = str_replace(["[SENDER]", "[MOBILE]", "[MESSAGE]"], [$senderId, $setting->mobile, $message], $setting->sms_api);
        $sms = file_get_contents($smsApiUrl);

        return back()->with("status", "your Message Send Sucessfully! Thank You");
    }
}
