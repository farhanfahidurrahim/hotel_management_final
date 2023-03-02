<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;

class DivisionController extends Controller
{
    public function index()
    {
        $data=Division::with('restaurant','hotel')->orderBy('name', 'asc')->get();

        return response()->json([
            'All Divison Name'=>$data,
        ]);
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name'=>'required|unique:divisions',
        ]);

        $data=Division::create([
            'name'=>$request->name,
        ]);

        return response()->json()([
            'message'=>"Successfully Divison Create Done!",
            'Divison Name'=>$data,
        ]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required|unique:divisions',
        ]);

        $data=Division::find($id);
        $data->update([
            'name'=>$request->name,
        ]);

        return response([
            'message'=>"Successfully Divison Update Done!",
            'Divison Name'=>$data,
        ]);
    }

    public function destroy($id)
    {
        $data=Division::find($id);
        $data->delete();

        return response([
            'message'=>"Successfully Divison Deleted!",
            'Divison Name'=>$data,
        ]);
    }
}
