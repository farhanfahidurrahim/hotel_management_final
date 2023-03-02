<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Restaurantmenu;

class RestaurantController extends Controller
{
    public function index()
    {
        
        $data=Restaurant::where('status','=',1)->with('restaurant_menu','restaurantrating')->orderBy('name','asc')->get();
        if ($data) {
            return response()->json([
                'Restaurants with menus and Rating'=>$data,
                200
            ]);
        }else{
            return response()->json(['error'=>'Not Found Restaurant Data']);
        }
    }
    public function viewRestaurant($id)
    {
        $data=Restaurant::where('id',$id)->where('status','=',1)->with('restaurantrating','restaurantreview')->first();
        if ($data) {
            return response()->json([
                'View Restaurant'=>$data,
                200
            ]);
        }else{
            return response()->json(['error'=>'Not Found Restaurant Data']);
        }
    }

    public function menuIndex()
    {
        $data=Restaurantmenu::with('restaurant')->orderBy('name','asc')->get();
        if ($data) {
            return response()->json([
                'All Restaurant Menus'=>$data,
                200
            ]);
        }else{
            return response()->json(['error'=>'Not Found Restaurant Menus Data']);
        }
    }
}
