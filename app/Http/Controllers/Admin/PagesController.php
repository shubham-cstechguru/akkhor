<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Http\Requests\PageRequest;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Pages::get();
        return view('backend.inc.pages.index', compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.inc.pages.pages');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $page = new Pages();
        $img_name = $request->page_image->getClientOriginalName();
        $image = $request->page_image->storeAs('pages', $img_name);
        $page->page_title = $request->page_title;
        $page->page_description = $request->page_description;
        $page->page_image = $img_name;
        $page->page_seo_title = $request->page_seo_title;
        $page->page_seo_description = $request->page_seo_description;
        $page->page_seo_keyword = $request->page_seo_keyword;
        $page->save();

        return redirect(route('admin.pages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(Pages $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit(Pages $page)
    {
        return view('backend.inc.pages.pages', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pages $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages $page)
    {
        $page->delete();
        return redirect(route('admin.pages.index'));
    }
}
