<?php

namespace App\Http\Controllers\Api;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hotelroom;

class HotelController extends Controller
{
    public function hotel_list(){
        $data = Hotel::with('rooms')->orderBy('name', 'asc')->get();
        if($data){
            return response()->json([
                'hote_list' =>$data, 
                200
            ]);
        }else{
            return response()->json(['error'=>'not found']);
        }
    }

    // All rooms 
    public function hotel_Room_list(){
        $data = Hotelroom::with('hotel')->orderBy('title', 'asc')->get();
        if($data){
            return response()->json([
                'room_list' =>$data, 
                200
            ]);
        }else{
            return response()->json(['error'=>'not found']);
        }
    }
}
