<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;


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
