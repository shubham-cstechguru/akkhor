<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Http\Requests\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $service = Service::get();
        return view('backend.inc.services.index');
    }

    public function getServices(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('service_image', function ($row) {
                    $image = '<img src="' . asset("/storage/services/" . $row->service_image) . '" alt="" width="100">';
                    return $image;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a type="button" name="button" class="btn-sm btn-info" href="' . route('admin.services.edit', $row->id) . '"> <i class="fas fa-edit"></i> </a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="handleDelete(' . $row->id . ')"><i class="fas fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'service_image'])
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
        return view('backend.inc.services.services');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $service = new Service();
        $img_name = $request->service_image->getClientOriginalName();
        $image = $request->service_image->storeAs('services', $img_name);
        $service->service_title = $request->service_title;
        $service->service_slug = Str::slug($request->service_title, '-');
        $service->service_description = $request->service_description;
        $service->service_image = $img_name;
        $service->service_seo_title = $request->service_seo_title;
        $service->service_seo_description = $request->service_seo_description;
        $service->service_seo_keyword = $request->service_seo_keyword;
        $service->save();

        return redirect(route('admin.services.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //+
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('backend.inc.services.services', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        if ($request->hasFile('service_image')) {
            $img_name = $request->service_image->getClientOriginalName();
            $image = $request->service_image->storeAs('services', $img_name);
            $service->service_image = $img_name;
        }
        $service->service_title = $request->service_title;
        $service->service_slug = Str::slug($request->service_title, '-');
        $service->service_description = $request->service_description;
        $service->service_seo_title = $request->service_seo_title;
        $service->service_seo_description = $request->service_seo_description;
        $service->service_seo_keyword = $request->service_seo_keyword;
        $service->save();

        return redirect(route('admin.services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect(route('admin.services.index'));
    }
}
