<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.inc.location.country.country');
    }

    public function getCountry(Request $request)
    {
        if ($request->ajax()) {
            $data = Country::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a type="button" name="button" class="btn-sm btn-info" href="' . route('admin.country.edit', $row->id) . '"> <i class="fas fa-edit"></i> </a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="handleDelete(' . $row->id . ')"><i class="fas fa-trash"></i></a>';
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
        return view('backend.inc.location.country.country');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|unique:mysql.sch_countries,name|max:255',
            'code' => 'required|numeric|unique:mysql.sch_countries,code|digits_between:1,4'
        ];

        $messages = [
            'name.required'   => 'Country Name is required.',
            'name.string'   => 'Country Name contain only alphabets.',
            'name.unique'   => 'Country Name is unique.',
            'name.max'   => 'Country Name is max of 255 charcters.',
            'code.required'   => 'Country Code is required.',
            'code.string'   => 'Country Code contain only numbers.',
            'code.unique'   => 'Country Code is unique.',            
            'code.digits_between'   => 'Country Code is min of 1 & max of 4 Digits.',

        ];

        $request->validate($rules, $messages);

        $country = new Country();

        $country->name = $request->name;
        $country->code = $request->code;

        $country->save();

        return redirect(route('admin.country.index'))->with('success', 'Country successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('backend.inc.location.country.country', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        
        $rules = [
            'name' => 'required|string|max:255|unique:mysql.sch_countries,name,'.$country->id,
            'code' => 'required|numeric|digits_between:1,4|unique:mysql.sch_countries,code,'.$country->id
        ];

        $messages = [
            'name.required'   => 'Country Name is required.',
            'name.unique'   => 'Country Name is unique.',
            'name.max'   => 'Country Name is max of 255 charcters.',
            'code.required'   => 'Country Code is required.',
            'code.string'   => 'Country Code contain only numbers.',
            'code.unique'   => 'Country Code is unique.',
            'code.digits_between'   => 'Country Code is min of 1 & max of 4 Digits.',
        ];

        $request->validate($rules, $messages);

        $country->name = $request->name;
        $country->code = $request->code;

        $country->save();

        return redirect(route('admin.country.index'))->with('success', 'Country successfully added.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect(route('admin.country.index'))->with('success', 'Country successfully Delete.');
    }
}
