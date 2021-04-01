<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demo;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DemoController extends Controller
{
    public function index()
    {
        // $req = Demo::get();
        // $data = compact('req');
        return view('backend.inc.request');
    }
    public function getDemos(Request $request)
    {
        if ($request->ajax()) {
            $data = Demo::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="handleDelete(' . $row->id . ')"><i class="fas fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->addColumn('company', function($row){
                    $company = '<ol> <li>'. $row->company .'</li> <li>'. $row->designation .'</li> <li>'.$row->requestedUrl.'</li> </ol>';
                    return $company;
                })
                ->addColumn('demo', function($row){
                    $demo = '<ol> <li>'.$row->test.'</li> <li>'.$row->daysToFinalize.'</li> </ol>';
                    return $demo;
                })
                ->rawColumns(['action', 'company', 'demo'])
                ->make(true);
        }
    }
    public function remove($id)
    {
        $del = Demo::findOrFail($id)->delete();
        return redirect()->back()->with('success','Demo Enquiry successfully Delete.');;
    }
}
