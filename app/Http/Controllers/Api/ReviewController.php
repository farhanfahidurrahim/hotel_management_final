<?php

namespace App\Http\Controllers\Api;

use App\Models\Review;
use App\Models\Reviewhotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $rv=Review::create([
            'user_id'=>$request->userid,
            'user_name'=>$request->username,
            'restaurant_id'=>$request->restid,
            'restaurant_name'=>$request->restname,
            'star'=>$request->star,
            'feedback'=>$request->feedback,
        ]);

        return response()->json([
            'message'=>"Restaurant Review Added Successfully",
            'Review'=>$rv,
        ]);
    }

    public function hotelStore(Request $request)
    {
        $rv=Reviewhotel::create([
            'user_id'=>$request->userid,
            'user_name'=>$request->username,
            'hotel_id'=>$request->hotelid,
            'hotel_name'=>$request->hotelname,
            'star'=>$request->star,
            'feedback'=>$request->feedback,
        ]);

        return response()->json([
            'message'=>"Hotel Review Added Successfully",
            'Review'=>$rv,
        ]);
    }
}
