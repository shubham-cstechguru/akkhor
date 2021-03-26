<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTags;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::get();
        return view('backend.inc.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogcategories = BlogCategory::all();
        $blogtags = BlogTags::all();
        $data = compact('blogcategories', 'blogtags');
        return view('backend.inc.blog.blog', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $blog = new Blog();
        $img_name = $request->blog_image->getClientOriginalName();
        $image = $request->blog_image->storeAs('blog', $img_name);
        $blog->blog_title = $request->blog_title;
        $blog->blog_slug = Str::slug($request->blog_title, '-');
        $blog->blog_short_description = $request->blog_short_description;
        $blog->blog_description = $request->blog_description;
        $blog->blog_image = $img_name;
        $blog->blog_seo_title = $request->blog_seo_title;
        $blog->blog_seo_description = $request->blog_seo_description;
        $blog->blog_seo_keyword = $request->blog_seo_keyword;
        $blog->save();

        $blog->blog_category()->sync($request->category_id);
        $blog->blog_tags()->sync($request->tags_id);

        return redirect(route('admin.blog.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blogcategories = BlogCategory::all();
        $blogtags = BlogTags::all();
        $data = compact('blogcategories', 'blogtags', 'blog');
        return view('backend.inc.blog.blog', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        if ($request->hasFile('blog_image')) {
            $img_name = $request->blog_image->getClientOriginalName();
            $image = $request->blog_image->storeAs('blog', $img_name);
            $blog->blog_image = $img_name;
        }

        $blog->blog_title = $request->blog_title;
        $blog->blog_short_description = $request->blog_short_description;
        $blog->blog_description = $request->blog_description;
        $blog->blog_seo_title = $request->blog_seo_title;
        $blog->blog_seo_description = $request->blog_seo_description;
        $blog->blog_seo_keyword = $request->blog_seo_keyword;
        $blog->save();

        $blog->blog_category()->sync($request->category_id);
        $blog->blog_tags()->sync($request->tags_id);

        return redirect(route('admin.blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
