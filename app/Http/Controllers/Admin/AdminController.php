<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Requests;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Demo;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $demo = Demo::whereMonth('created_at', '=', '4')->count();
        $contact = Contact::whereMonth('created_at', '=', '4')->count();
        $data = compact('demo', 'contact');
        return view('backend.inc.index', $data);
    }
}
