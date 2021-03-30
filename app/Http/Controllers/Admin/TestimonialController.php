<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Http\Requests\TestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Intervention\Image\ImageManagerStatic as Image;


class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $testimonial = Testimonial::get();
        return view('backend.inc.testimonial.index');
    }
    public function getTestimonials(Request $request)
    {
        if ($request->ajax()) {
            $data = Testimonial::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('t_image', function ($row) {
                    $image = '<img src="' . asset("/storage/testimonial/" . $row->t_image) . '" alt="" width="100">';
                    return $image;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a type="button" name="button" class="btn-sm btn-info" href="' . route('admin.testimonial.edit', $row->id) . '"> <i class="fas fa-edit"></i> </a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="handleDelete(' . $row->id . ')"><i class="fas fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 't_image'])
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
        return view('backend.inc.testimonial.testimonial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        $testimonial = new Testimonial();
        // $img_name = $request->t_image->getClientOriginalName();
        // $image = $request->t_image->storeAs('testimonial', $img_name);

        if ($request->hasFile('t_image')) {

            $image       = $request->file('t_image');
            $filename    = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('storage/testimonial/' . $filename));

            $testimonial->t_image = $filename;
        }

        $testimonial->t_name = $request->t_name;
        $testimonial->t_testimonial = $request->t_testimonial;
        $testimonial->save();

        return redirect(route('admin.testimonial.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('backend.inc.testimonial.testimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        if ($request->hasFile('t_image')) {

            $image       = $request->file('t_image');
            $filename    = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('storage/testimonial/' . $filename));

            $testimonial->t_image = $filename;
        }

        $testimonial->t_name = $request->t_name;
        $testimonial->t_testimonial = $request->t_testimonial;
        $testimonial->save();

        return redirect(route('admin.testimonial.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect(route('admin.testimonial.index'));
    }
}
