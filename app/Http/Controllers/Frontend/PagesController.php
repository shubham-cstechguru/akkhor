<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index($slug) {
        $page = Pages::where('page_slug', $slug)->first();
        $data = compact('page');

        return view('frontend.inc.pages', $data);
    }
}
