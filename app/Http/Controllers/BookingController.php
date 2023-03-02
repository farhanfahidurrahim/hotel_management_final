<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Booking::orderBy('check_in', 'desc')->get();
        return view('booking.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            $data=User::where('phone','LIKE',$request->customer_phone.'%')->get();
            $output='';
            if (count($data) > 0) {
                $output='<ul class="list-group" style="display:block;position:relative;z-index:1">';
                    foreach($data as $row){
                        $output .='<li class="list-group-item">'.$row->phone.'</li>';
                    }
                $output .= '</ul>';
            }
            else{
                $output .='<li class="list-group-item">No Customer Data Found</li>';
            }

            return $output;
        }

        $hotel=Hotel::all();
        return view('booking.create',compact('hotel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //dd($request->all());
           $hotelid=DB::table('hotelrooms')->where('id',$request->room_id)->first();
           //dd($hotelid);
           Booking::insert([
            //    'customer_name'=>$request->customer_name,
               'user_id'=>$request->user_id,
               'customer_phone'=>$request->customer_phone,
               'hotel_id'=>$hotelid->hotel_id,
               'room_id'=>$request->room_id,
               'check_in'=>$request->check_in,
               'check_out'=>$request->check_out,
               'distance'=>$request->distance,
            //    'numberof_room'=>$request->numberof_room,
               'original_price'=>$request->original_price,
               'discount'=>$request->discount,
               'final_price'=>$request->final_price,
               'status'=>$request->status,
           ]);
        // $input=$request->all();

        // $basic  = new \Vonage\Client\Credentials\Basic("46f12234", "srjs0NuIPynSlZZ2");
        // $client = new \Vonage\Client($basic);

        // $response = $client->sms()->send(
        //     new \Vonage\SMS\Message\SMS('88'.$input['customer_phone'], 'Hotel-Management', 'Hotel Booking Confirmation!')
        // );

        // $message = $response->current();

        // if ($message->getStatus() == 0) {
        //     return redirect()->route('booking.index')->with('success','The Message Sent Successfully!');
        // } else {
        //     return redirect()->route('booking.index')->with('error',"The message failed with status: " . $message->getStatus() . "\n");
        // }

        return redirect()->route('booking.index')->with('success','Booking placed and The Message Sent Successfully!');
    }

    public function bookingStatusUpdate($id,$status)
    {   
        
        $order=Booking::find($id);
       
        $order->update(['status'=>$status]);
        return redirect()->back()->with('success','Status updated successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data=Booking::FindorFail($id);
        $hotel=Hotel::all();
        return view('booking.edit',compact('data','hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $hotelid=DB::table('hotelrooms')->where('id',$request->room_id)->first();
        //dd($hotelid);
        $data = Booking::FindorFail($id);
        $data->update([
            
            'hotel_id'=>$hotelid->hotel_id,
            'room_id'=>$request->room_id,
            'check_in'=>$request->check_in,
            'check_out'=>$request->check_out,
            'distance'=>$request->distance,
            // 'numberof_room'=>$request->numberof_room,
            'original_price'=>$request->original_price,
            'discount'=>$request->discount,
            'final_price'=>$request->final_price,
            'status'=>$request->status,
        ]);
        return redirect()->route('booking.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
