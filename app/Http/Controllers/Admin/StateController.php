<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::all();
        return view('backend.inc.location.state.state', compact('country'));
    }

    public function getState(Request $request)
    {
        if ($request->ajax()) {
            $data = State::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a type="button" name="button" class="btn-sm btn-info" href="' . route('admin.state.edit', $row->id) . '"> <i class="fas fa-edit"></i> </a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="handleDelete(' . $row->id . ')"><i class="fas fa-trash"></i></a>';
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
        $country = Country::all();
        return view('backend.inc.location.state.state', compact('country'));
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
            'name' => 'required|string|unique:mysql.sch_states,name|max:255',
            'code' => 'required|numeric|unique:mysql.sch_states,code|digits_between:1,4',
            'country' => 'required'
        ];

        $messages = [
            'name.required'   => 'State Name is required.',
            'name.string'   => 'State Name contain only alphabets.',
            'name.unique'   => 'State Name is unique.',
            'name.max'   => 'State Name is max of 255 charcters.',
            'code.required'   => 'State Code is required.',
            'code.string'   => 'State Code contain only numbers.',
            'code.unique'   => 'State Code is unique.',
            'code.digits_between'   => 'State Code is min of 1 & max of 4 Digits.',
            'country.required' => 'Please Select Country'
        ];

        $request->validate($rules, $messages);

        $state = new State();

        $state->name = $request->name;
        $state->code = $request->code;
        $state->country = $request->country;

        $state->save();

        return redirect(route('admin.state.index'))->with('success', 'State successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        $country = Country::all();
        return view('backend.inc.location.state.state', compact('state', 'country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        $rules = [
            'name' => 'required|string|max:255|unique:mysql.sch_states,name,'. $state->id,
            'code' => 'required|numeric|digits_between:1,4|unique:mysql.sch_states,code,'. $state->id,
            'country' => 'required'
        ];

        $messages = [
            'name.required'   => 'State Name is required.',
            'name.string'   => 'State Name contain only alphabets.',
            'name.unique'   => 'State Name is unique.',
            'name.max'   => 'State Name is max of 255 charcters.',
            'code.required'   => 'State Code is required.',
            'code.string'   => 'State Code contain only numbers.',
            'code.unique'   => 'State Code is unique.',
            'code.digits_between'   => 'State Code is min of 1 & max of 4 Digits.',
            'country.required' => 'Please Select Country'
        ];

        $request->validate($rules, $messages);

        $state->name = $request->name;
        $state->code = $request->code;
        $state->country = $request->country;

        $state->save();

        return redirect(route('admin.state.index'))->with('success', 'State successfully update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        $state->delete();
        return redirect(route('admin.state.index'))->with('success', 'State successfully Delete.');
    }
}
