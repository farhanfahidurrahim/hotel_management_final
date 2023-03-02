<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\EmergencyContact;
use App\Http\Controllers\Controller;
use App\Models\AboutUs;

class EmergencyController extends Controller
{
    public function index()
    {
        $emergencyContact = EmergencyContact::get();
        if($emergencyContact){
            return response()->json([
                'data'=>$emergencyContact,
                200
            ]);
        }else{
            return response()->json([
                'message'=>'No cantact found'
            ]);
        }
       
    }

    public function aboutUS(){
        $firstData =  AboutUs::orderBy('id','desc')->first();
        if($firstData){
            return response()->json([
                'data'=>$firstData,
                200
            ]);
        }else{
            return response()->json([
                'message'=>'Not found'
            ]);
        }
    }
}
