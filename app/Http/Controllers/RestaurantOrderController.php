<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Claimeddiscount;
use Illuminate\Contracts\View\View;

class RestaurantOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("orders.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("orders.create");
    }

    public function inProgress()
    {
        return view("orders.in_progress");
    }

    public function pending()
    {
        return view("orders.pending");
    }

    public function delivered()
    {
        return view("orders.delivered");
    }

    public function cancelled()
    {
        return view("orders.cancelled");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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

    public function claimedDiscount()
    {   
        $data=Claimeddiscount::all();
        return view('orders.claimed_discount',compact('data'));
    } 

    public function claimedDiscountEdit($id)
    {   
        $data=Claimeddiscount::FindorFail($id);
        return view('orders.claimed_discount_edit',compact('data'));
    }

    public function claimedDiscountUpdate(Request $request,$id)
    {
        $requestData=$request->all();
        $data=Claimeddiscount::FindorFail($id);
        $data->fill($requestData)->save();

        return redirect()->route('claimed.discount');
    }
}
