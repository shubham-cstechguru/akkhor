<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Http\Requests\PageRequest;
use App\Http\Requests\UpdatePageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Intervention\Image\ImageManagerStatic as Image;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $page = Pages::get();
        return view('backend.inc.pages.index');
    }

    public function getPages(Request $request)
    {
        if ($request->ajax()) {
            $data = Pages::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('page_image', function ($row) {
                    $image = '<img src="' . asset("/storage/pages/" . $row->page_image) . '" alt="" width="100">';
                    return $image;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a type="button" name="button" class="btn-sm btn-info" href="' . route('admin.pages.edit', $row->id) . '"> <i class="fas fa-edit"></i> </a>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'page_image'])
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
        if ($request->hasFile('page_image')) {
            if ($request->page_image != '') {
                $image       = $request->file('page_image');
                $filename    = $image->getClientOriginalName();

                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('storage/pages/' . $filename));

                $page->page_image = $filename;
            }
        }
        $page->page_title = $request->page_title;
        $page->page_slug = Str::slug($request->page_title, '-');
        $page->page_description = $request->page_description;
        $page->page_seo_title = $request->page_seo_title;
        $page->page_seo_description = $request->page_seo_description;
        $page->page_seo_keyword = $request->page_seo_keyword;
        $page->save();

        return redirect(route('admin.pages.index'))->with('success', 'Page successfully added.');
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
    public function update(UpdatePageRequest $request, Pages $page)
    {
        if ($request->hasFile('page_image')) {
            if ($request->page_image != '') {
                $image       = $request->file('page_image');
                $filename    = $image->getClientOriginalName();

                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('storage/pages/' . $filename));
                $page->page_image = $filename;
            }
        }

        $page->page_title = $request->page_title;
        $page->page_description = $request->page_description;
        $page->page_seo_title = $request->page_seo_title;
        $page->page_seo_description = $request->page_seo_description;
        $page->page_seo_keyword = $request->page_seo_keyword;
        $page->save();

        return redirect(route('admin.pages.index'))->with('success', 'Page successfully Update.');
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
        return redirect(route('admin.pages.index'))->with('success', 'Page successfully Delete.');
    }

    public function removeimg(Pages $page)
    {  
        // dd($page);
        $img = $page->page_image;
        if(file_exists(public_path('storage/pages/' . $img))){
            unlink(public_path('storage/pages/' . $img));
        }
        $page->page_image = "";
        $page->save();

        return redirect(route('admin.pages.index'))->with('success', 'Image successfully Delete.');
    }
}
