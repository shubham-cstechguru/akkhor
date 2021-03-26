<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demo;

class DemoController extends Controller
{
    public function index() {
        $req = Demo::get();
        $data = compact('req');
        return view('backend.inc.request', $data);
    }
    public function remove($id)
    {
        $del = Demo::findOrFail($id)->delete();
        return redirect()->back();
    }
}