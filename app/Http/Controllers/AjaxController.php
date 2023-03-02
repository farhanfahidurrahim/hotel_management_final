<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Upozilla;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getDistricts(Request $request)
    {
        $districts = District::where('division_id', $request->input('division'))->get(['name','id']);
        return response()->json($districts);
    }

    public function getUpazillas(Request $request)
    {
        $upazillas = Upozilla::where('district_id', $request->input('district'))->get(['name','id']);
        return response()->json($upazillas);
    }
}
