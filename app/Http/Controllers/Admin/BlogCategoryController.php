<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Http\Requests\BlogCategoryRequest;
use App\Http\Requests\UpdateBlogCategoryRequest;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogcategory = BlogCategory::get();
        return view('backend.inc.blog.category.index', compact('blogcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.inc.blog.category.blogcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCategoryRequest $request)
    {
        $blogcategory = new BlogCategory();
        $blogcategory->category_title = $request->category_title;
        $blogcategory->category_description = $request->category_description;
        $blogcategory->category_seo_title = $request->category_seo_title;
        $blogcategory->category_seo_keyword = $request->category_seo_keyword;
        $blogcategory->category_seo_description = $request->category_seo_description;
        $blogcategory->save();

        return redirect(route('admin.blogcategory.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogcategory)
    {
        return view('backend.inc.blog.category.blogcategory', compact('blogcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogCategoryRequest $request, BlogCategory $blogcategory)
    {
        $blogcategory->category_title = $request->category_title;
        $blogcategory->category_description = $request->category_description;
        $blogcategory->category_seo_title = $request->category_seo_title;
        $blogcategory->category_seo_keyword = $request->category_seo_keyword;
        $blogcategory->category_seo_description = $request->category_seo_description;
        $blogcategory->save();

        return redirect(route('admin.blogcategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogcategory)
    {
        $blogcategory->delete();
        return redirect(route('admin.blogcategory.index'));
    }
}
