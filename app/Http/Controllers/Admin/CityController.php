<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state = State::all();
        return view('backend.inc.location.city.city', compact('state'));
    }

    public function getCity(Request $request)
    {
        if ($request->ajax()) {
            $data = City::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a type="button" name="button" class="btn-sm btn-info" href="' . route('admin.city.edit', $row->id) . '"> <i class="fas fa-edit"></i> </a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="handleDelete(' . $row->id . ')"><i class="fas fa-trash"></i></a>';
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
        $state = State::all();
        return view('backend.inc.location.city.city', compact('state'));
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
            'name' => 'required|string|unique:mysql.sch_cities,name|max:255',
            'state' => 'required'
        ];

        $messages = [
            'name.required'   => 'City Name is required.',
            'name.string'   => 'City Name contain only alphabets.',
            'name.unique'   => 'City Name is unique.',
            'name.max'   => 'City Name is max of 255 charcters.',
            'state.required' => 'Please Select State'
        ];

        $request->validate($rules, $messages);

        $city = new City();

        $city->name = $request->name;
        $city->state = $request->state;

        $city->save();

        return redirect(route('admin.city.index'))->with('success', 'City successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $state = State::all();
        return view('backend.inc.location.city.city', compact('city', 'state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $rules = [
            'name' => 'required|string|max:255|unique:mysql.sch_cities,name,'. $city->id,
            'state' => 'required'
        ];

        $messages = [
            'name.required'   => 'City Name is required.',
            'name.string'   => 'City Name contain only alphabets.',
            'name.unique'   => 'City Name is unique.',
            'name.max'   => 'City Name is max of 255 charcters.',
            'state.required' => 'Please Select State'
        ];

        $request->validate($rules, $messages);

        $city->name = $request->name;
        $city->state = $request->state;

        $city->save();

        return redirect(route('admin.city.index'))->with('success', 'City successfully update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect(route('admin.city.index'))->with('success', 'City successfully Delete.');
    }
}
