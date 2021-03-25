<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $setting     = Setting::find(1);
        $editData =  $setting->toArray();
        // dd($editData);ss
        $request->replace($editData);
        //send to view
        $request->flash();
        $data = compact('setting');

        return view('backend.inc.settings', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $record             = Setting::find(1);
        $record->title         = $request->title;
        $record->tagline     = $request->tagline;
        $record->mobile     = $request->mobile;
        $record->email      = $request->email;
        $record->address      = $request->address;
        $record->google_maps      = $request->google_maps;
        $record->facebook      = $request->facebook;
        $record->twitter      = $request->twitter;
        $record->linkedin      = $request->linkedin;
        $record->youtube      = $request->youtube;
        $record->sms_api      = $request->sms_api;

        if ($request->hasFile('logo')) {
            $img_name = $request->logo->getClientOriginalName();
            $image = $request->logo->storeAs('logo', $img_name);
            $record->logo = $img_name;
        }

        if ($request->hasFile('favicon')) {
            $img_name = $request->favicon->getClientOriginalName();
            $image = $request->favicon->storeAs('favicon', $img_name);
            $record->favicon = $img_name;
        }

        if ($record->save()) {
            return redirect(route('admin.setting'))->with('success', 'Success! Record has been edided');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
