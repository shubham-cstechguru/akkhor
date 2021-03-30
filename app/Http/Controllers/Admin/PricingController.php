<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Http\Requests\PricingRequest;
use App\Http\Requests\UpdatePricingRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pricing = Pricing::get()->toArray();
        return view('backend.inc.pricing.index');
    }
    public function getPricings(Request $request)
    {
        if ($request->ajax()) {
            $data = Pricing::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a type="button" name="button" class="btn-sm btn-info" href="'.route('admin.pricing.edit', $row->id).'"> <i class="fas fa-edit"></i> </a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="handleDelete('.$row->id.')"><i class="fas fa-trash"></i></a>';
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
        return view('backend.inc.pricing.pricing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PricingRequest $request)
    {
        $input  = $request->all();
        $pricing = new Pricing($input);
        $pricing->name = $request->name;
        $pricing->pricing_description = $request->pricing_description;
        $pricing->cost = $request->cost;
        $pricing->pricing_points = $request->pricing_points;
        $pricing->save();

        return redirect(route('admin.pricing.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {
        $pricing = $pricing->toArray();
        return view('backend.inc.pricing.pricing', compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePricingRequest $request, Pricing $pricing)
    {

        // dd($request->all());

        $price_data = Pricing::findOrFail($pricing->id);
        $price_data->name = $request->name;
        $price_data->pricing_description = $request->pricing_description;
        $price_data->cost = $request->cost;
        $price_data->pricing_points = $request->pricing_points;
        $price_data->save();

        return redirect(route('admin.pricing.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricing)
    {
        $pricing->delete();
        return redirect(route('admin.pricing.index'));
    }
}
