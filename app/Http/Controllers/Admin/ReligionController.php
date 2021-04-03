<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Religion;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ReligionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.inc.religion.religion');
    }

    public function getReligion(Request $request)
    {
        if ($request->ajax()) {
            $data = Religion::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a type="button" name="button" class="btn-sm btn-info" href="' . route('admin.religion.edit', $row->id) . '"> <i class="fas fa-edit"></i> </a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="handleDelete(' . $row->id . ')"><i class="fas fa-trash"></i></a>';
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
        return view('backend.inc.religion.religion');
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
            'name' => 'required|string|unique:mysql.sch_religions|max:255',
        ];

        $messages = [
            'name.required'   => 'Religion Name is required.',
            'name.string'   => 'Religion Name contain only alphabets.',
            'name.unique'   => 'Religion Name is unique.',
            'name.max'   => 'Religion Name is max of 255 charcters.',
        ];

        $request->validate($rules, $messages);

        $religion = new Religion();

        $religion->name = $request->name;

        $religion->save();

        return redirect(route('admin.religion.index'))->with('success', 'Religion successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Religion  $religion
     * @return \Illuminate\Http\Response
     */
    public function show(Religion $religion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Religion  $religion
     * @return \Illuminate\Http\Response
     */
    public function edit(Religion $religion)
    {
        return view('backend.inc.religion.religion', compact('religion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Religion  $religion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Religion $religion)
    {
        $rules = [
            'name' => 'required|string|max:255|unique:mysql.sch_religions,name,'.$religion->id,
        ];

        $messages = [
            'name.required'   => 'Religion Name is required.',
            'name.string'   => 'Religion Name contain only alphabets.',
            'name.unique'   => 'Religion Name is Taken.',
            'name.max'   => 'Religion Name is max of 255 charcters.',
        ];

        $request->validate($rules, $messages);

        $religion->name = $request->name;

        $religion->save();

        return redirect(route('admin.religion.index'))->with('success', 'Religion successfully added.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Religion  $religion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Religion $religion)
    {
        $religion->delete();
        return redirect(route('admin.religion.index'))->with('success', 'Religion successfully Delete.');
    }
}
