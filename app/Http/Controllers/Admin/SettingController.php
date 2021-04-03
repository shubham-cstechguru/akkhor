<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $setting     = Setting::findOrFail(1);
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

            $image       = $request->file('logo');
            $filename    = $image->getClientOriginalName();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(90, 90, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('storage/logo/' .$filename));
        
            $record->logo = $filename;
        }

        if ($request->hasFile('favicon')) {

            $image       = $request->file('favicon');
            $filename    = $image->getClientOriginalName();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(10, 10, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('storage/favicon/' .$filename));
        
            $record->favicon = $filename;

        }

        if ($record->save()) {
            return redirect(route('admin.setting'))->with('success', 'Success! Record has been edited');
        }
    }
}
