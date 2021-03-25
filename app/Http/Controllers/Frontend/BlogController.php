<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $blog = Blog::paginate(1);
        $setting = Setting::first();
        return view('frontend.inc.blog', compact('blog', 'setting'));
    }
    public function single($slug)
    {
      $blog = Blog::where('blog_slug', $slug)->first();
      $setting = Setting::first();
      $data = compact('blog', 'setting');
      return view('frontend.inc.singleblog', $data);
    }
}
