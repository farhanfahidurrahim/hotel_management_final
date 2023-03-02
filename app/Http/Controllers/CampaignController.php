<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data=Campaign::orderBy('id','desc')->get();
        return view("campaign.index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("campaign.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       
            $data=$request->all();
            
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->move(public_path('campaigns/images/'),$filename);
    
                $data['photo'] = $filename;
            }
            Campaign::create($data);
            return redirect()->route('campaign.index');
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
       $data = Campaign::FindorFail($id);
        return view('campaign.edit',compact('data'));
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
        $data = $request->all();
        $updateData = Campaign::FindorFail($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('campaigns/images/'),$filename);
            @unlink(public_path('campaigns/images/'.$updateData->photo));

            $data['photo'] = $filename;
        }
        $updateData->fill($data)->save();
        return redirect()->route('campaign.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Campaign::FindorFail($id);
        @unlink(public_path('campaigns/images/'.$data->photo));
        $data->delete();
        return back();
    }
}
