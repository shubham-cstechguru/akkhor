<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Request;

class RequestController extends Controller
{
    public function index() {
        $req = Request::get();
        $data = compact('req');
        return view('backend.inc.request', $data);
    }
    public function remove($id)
    {
        $del = Request::findOrFail($id)->delete();
        return redirect()->back();
    }
}