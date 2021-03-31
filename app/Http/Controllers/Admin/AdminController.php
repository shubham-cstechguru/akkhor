<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Requests;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $demo = Demo::get();
        $data = compact('month');
        return view('backend.inc.index', $data);
    }
}
