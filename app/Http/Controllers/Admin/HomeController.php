<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $home     = Home::find(1);
        $editData =  $home->toArray();
        $request->replace($editData);
        $request->flash();
        $data = compact('home');

        return view('backend.inc.home', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $record             = Home::find(1);
        $record->slider_title         = $request->slider_title;
        $record->slider_description     = $request->slider_description;
        $record->salient_title     = $request->salient_title;
        $record->salient_desc      = $request->salient_desc;
        $record->service_title      = $request->service_title;
        $record->service_desc      = $request->service_desc;
        $record->client_title      = $request->client_title;
        $record->client_desc      = $request->client_desc;

        if ($record->save()) {
            return redirect(route('admin.home'))->with('success', 'Success! Record has been edited');
        }
    }
}
