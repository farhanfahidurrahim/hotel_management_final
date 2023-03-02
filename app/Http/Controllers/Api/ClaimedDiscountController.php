<?php

namespace App\Http\Controllers\Api;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\Claimeddiscount;
use App\Http\Controllers\Controller;

class ClaimedDiscountController extends Controller
{
    public function store(Request $request)
    {  
        //$data = $request->all();
        // $restaurant=Restaurant::where('id',$request->restaurant_id)->first();
        // $cd=Claimeddiscount::create([
        //     'user_id'=>$request->user_id,
        //     'user_name'=>$request->user_name,
        //     'restaurant_id'=>$request->restaurant_id,
        //     'restaurant_name'=>$request->restaurant_name,
        //     'restaurant_discount'=>$restaurant->discount,
        //     'status'=>$request->status,
        // ]);

        // $user_id=$request->userid;
        // $user_name=$request->username;
        // $rest_id=$request->restid;
        // $rest_name=$request->restname;
        // $discount=$request->disc;

        $restaurant=Restaurant::where('id',$request->restid)->first();
        $cd=Claimeddiscount::create([
            'user_id'=>$request->userid,
            'user_name'=>$request->username,
            'restaurant_id'=>$request->restid,
            'restaurant_name'=>$request->restname,
            'restaurant_discount'=>$restaurant->discount,
        ]);

        return response()->json([
            'message'=>"Claimed Discount Successfully",
            'claimed discount'=>$cd,
        ]);
    }
}
