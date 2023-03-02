<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Hotel;
use App\Models\Hotelrating;
use App\Models\Hotelroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hotel::all();
        // return $data;
        return view('hotels.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Division::all();
        return view('hotels.create', compact('data'));
    }
    public function view()
    {
        return view('hotels.view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'division_id' => 'required',
            'location' => 'required',
            'description' => 'required',
            'discount' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'contact_no' => 'required',
            'facebook_page' => 'required',
            'website_link' => 'required',
            'youtube_link' => 'required',
            'tags' => 'required',
            'services' => 'required',
            'photo' => 'required',
        ]);

        // dd($request->all());

        $data = array();
        $data['name'] = $request->name;
        $data['division_id'] = $request->division_id;
        $data['location'] = $request->location;
        $data['description'] = $request->description;
        $data['price'] = $request->price;
        $data['offer_price'] = $request->offer_price;
        $data['discount'] = $request->discount;
        $data['latitude'] = $request->latitude;
        $data['longitude'] = $request->longitude;
        $data['contact_no'] = $request->contact_no;
        $data['facebook_page'] = $request->facebook_page;
        $data['website_link'] = $request->website_link;
        $data['youtube_link'] = $request->youtube_link;
        $data['tags'] = $request->tags;
        $data['services'] = $request->services;
        $data['status'] = $request->status;
        $data['popular_deal'] = $request->popular_deal;
        //Working with Image
        if ($request->hasFile('photo')) {

            $file = $request->file('photo');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            //dd($filename);
            $file->move(public_path('hotel/images/'), $filename);

            $data['photo'] = $filename;
        }

        DB::table('hotels')->insert($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Hotel::find($id);
        $div = Division::all();
        return view('hotels.edit', compact('data', 'div'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        // return $requestData;
        $data = Hotel::FindorFail($id);

        if ($request->hasFile('photo')) {

            $file = $request->file('photo');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            //dd($filename);
            $file->move(public_path('hotel/images/'), $filename);
            // deleting previous photo
            @unlink(public_path('hotel/images/' . $data->photo));
            $requestData['photo'] = $filename;
        }
        $data->fill($requestData)->save();
        return redirect()->route('hotels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Hotel::find($id);
        @unlink(public_path('hotel/images/' . $data->photo));
        $data->delete();

        return redirect()->back();
    }

    public function rooms()
    {
        $data = Hotelroom::all();
        return view('hotels.rooms', compact('data'));
    }

    public function roomCreate()
    {
        $hotel_name = Hotel::orderby('name', 'asc')->get();
        return view('hotels.rooms_create', compact('hotel_name'));
    }

    public function roomStore(Request $request)
    {
        $data = $request->all();

        // return $data;

        $discountPrice =  $data['price'] * $data['discount'] / 100 ;
        $data['discount_price'] = $data['price'] - $discountPrice ;
        // return $data;
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            //dd($filename);
            $file->move(public_path('hotel/rooms/'), $filename);

            $data['image'] = $filename;
        }

        HotelRoom::create($data);
        return redirect()->route('hotels.rooms');
    }

    public function roomEdit($id)
    {
        $data = Hotelroom::findOrFail($id);
        $hdata = Hotel::all();
        return view('hotels.rooms_edit', compact('data', 'hdata'));
    }

    public function roomUpdate(Request $request, $id)
    {
        $data = $request->all();
        $discountPrice =  $data['price'] * $data['discount'] / 100 ;
        $data['discount_price'] = $data['price'] - $discountPrice ;
        $room = HotelRoom::findOrFail($id);
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            //dd($filename);
            $file->move(public_path('hotel/rooms/'), $filename);
            // deleting previous photo
            @unlink(public_path('hotel/rooms/' . $room->image));
            $data['image'] = $filename;
        }
        $room->fill($data)->save();
        return redirect()->route('hotels.rooms');
    }

    public function roomDestroy($id)
    {
        $data = Hotelroom::findOrFail($id);
        @unlink(public_path('hotel/rooms/' . $data->image));
        $data->delete();
        return back();
    }

    public function ratings()
    {
        $data = Hotelrating::with('hotel')->get();
        // return $data;
        return view('hotels.ratings', compact('data'));
    }
    public function ratingsMark()
    {
        $data = Hotel::orderBy('name', 'asc')->get();
        return view('hotels.rating_create', compact('data'));
    }

    public function ratingSubmit(Request $request)
    {
        $data = $request->all();
        if (Hotelrating::where('hotel_id', $data['hotel_id'])->exists()) {
            return 'You have already given star to the selected hotel';
        } else {
            Hotelrating::create($data);
            return redirect()->route('hotels.rating');
        }

    }

    public function editHotelRating($id)
    {
        $data = Hotelrating::with('hotel')->FindorFail($id);
        $Hoteldata = Hotel::orderBy('name', 'asc')->get();
        // return $data;
        return view('hotels.rating_edit',compact('data','Hoteldata'));
    }

    public function updateHotelRating(Request $request , $id){
        $data = $request->all();
        $rating = Hotelrating::FindorFail($id);
        $rating->fill($data)->save();
        return redirect()->route('hotels.rating');
    }

     //Ajax Get Hotel Price for Booking
     public function GetHotelOriginalPrice($id)
     {
         $data=DB::table('hotelrooms')->where('id',$id)->get();
         return response()->json($data);
     }
 
     public function GetHotelDiscountPrice($id)
     {
         $data=DB::table('hotelrooms')->where('id',$id)->get();
         return response()->json($data);
     }
 
     public function GetHotelFinalPrice($id)
     {
         $data=DB::table('hotelrooms')->where('id',$id)->get();
         return response()->json($data);
     }
 

    
}
