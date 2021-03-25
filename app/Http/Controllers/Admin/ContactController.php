<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::get();
        $data = compact('contact');
        return view('backend.inc.contact', $data);
    }
    public function remove($id)
    {
        $del = Contact::findOrFail($id)->delete();
        return redirect()->back();
    }
}
