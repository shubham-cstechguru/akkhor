<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Http\Requests\PricingRequest;
use App\Http\Requests\UpdatePricingRequest;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricing = Pricing::get()->toArray();
        return view('backend.inc.pricing.index', compact('pricing'));
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
        $pricing = new Pricing();
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
        $pricing->name = $request->name;
        $pricing->pricing_description = $request->pricing_description;
        $pricing->cost = $request->cost;
        $pricing->pricing_points = $request->pricing_points;
        $pricing->save();

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
