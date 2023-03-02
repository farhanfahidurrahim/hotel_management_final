<?php

namespace App\Http\Controllers;

use App\Http\Requests\TermsRequest;
use App\Models\TermsOfService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TermsOfServiceController extends Controller
{
    public function index()
    {
        $data=TermsOfService::first();
        return view('term_and_service.create',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        TermsOfService::create($data);

        return redirect()->back();
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
    public function edit()
    {
        $privacy  = TermsOfService::where('id', 1)->first();
        return View("privacy_policy.create", compact('privacy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $data = $request->validate([
            'title' => 'string|max:255',
            'description' => 'string|max:255',
        ]);

        $privacy = TermsOfService::findOrFail($id);
        $privacy->update($data);

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data=TermsOfService::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }
}
