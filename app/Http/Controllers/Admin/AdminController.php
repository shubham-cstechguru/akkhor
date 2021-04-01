<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Requests;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Demo;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Testimonial;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $blog = Blog::count();
        $demo = Demo::count();
        $contact = Contact::count();
        $pricing = Pricing::count();
        $services = Service::count();
        $testimonial = Testimonial::count();
        $data = compact('demo', 'contact', 'blog', 'pricing', 'services', 'testimonial');
        return view('backend.inc.index', $data);
    }
}
