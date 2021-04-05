<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogTags;
use App\Http\Requests\BlogTagsRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BlogTagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $blogtag = BlogTags::get();
        return view('backend.inc.blog.tags.index');
    }
    public function getBlogTags(Request $request)
    {
        if ($request->ajax()) {
            $data = BlogTags::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a type="button" name="button" class="btn-sm btn-info" href="'.route('admin.blogtags.edit', $row->id).'"> <i class="fas fa-edit"></i> </a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="handleDelete('.$row->id.')"><i class="fas fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.inc.blog.tags.blogtags');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogTagsRequest $request)
    {
        $blogtag = new BlogTags();
        $blogtag->tags_title = $request->tags_title;
        $blogtag->tags_seo_title = $request->tags_seo_title;
        $blogtag->tags_seo_keyword = $request->tags_seo_keyword;
        $blogtag->tags_seo_description = $request->tags_seo_description;
        $blogtag->save();

        return redirect(route('admin.blogtags.index'))->with('success','Blog Tag successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogTags  $blogtag
     * @return \Illuminate\Http\Response
     */
    public function show(BlogTags $blogtag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogTags  $blogtag
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogTags $blogtag)
    {
        return view('backend.inc.blog.tags.blogtags', compact('blogtag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogTags  $blogtag
     * @return \Illuminate\Http\Response
     */
    public function update(BlogTagsRequest $request, BlogTags $blogtag)
    {
        $blogtag->tags_title = $request->tags_title;
        $blogtag->tags_seo_title = $request->tags_seo_title;
        $blogtag->tags_seo_keyword = $request->tags_seo_keyword;
        $blogtag->tags_seo_description = $request->tags_seo_description;
        $blogtag->save();

        return redirect(route('admin.blogtags.index'))->with('success','Blog Tag successfully Update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogTags  $blogtag
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogTags $blogtag)
    {
        $blogtag->delete();
        return redirect(route('admin.blogtags.index'))->with('success','Blog successfully Delete.');
    }
}
