<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = User::where('role','customer')->get();
        return view("customer.index",compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("customer.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'nullable|email|max:255',
        //     'phone' => 'required|string|min:0',
        //     'status' => 'required|boolean',
        // ]);
        $data=$request->all();

        //Working with Image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('file/customer/images/'),$filename);

            $data['image'] = $filename;
        }

        User::create([
            'name' => $data['name'],
            'role' => 'customer',
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'image' => $data['image'],
            'address' => $data['address'],
            'prefer' => $data['prefer'],
            'status' => $data['status'],
        ]);
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = User::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'nullable|email|max:255',
        //     'phone' => 'required|string|min:0',
        //     'status' => 'required|boolean',
        // ]);

        //dd($request->all());
        $requestData = $request->all();
        $requestData['password']=Hash::make($request->password);
        $data =   User::FindorFail($id);
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            //dd($filename);
            $file->move(public_path('file/customer/images/'), $filename);
            // deleting previous photo 
            @unlink(public_path('file/customer/images/'. $data->image));
            $requestData['image']= $filename;
        }
        $data->fill($requestData)->save();

        return redirect()->route('customer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $customer = Customer::findOrFail($id);
        // $customer->delete();
        // return redirect()->back();

        $data = User::findOrFail($id);
        @unlink(public_path('file/customer/images/' . $data->image));
        $data->delete();
        return back();
    }

     //Ajax Get Customer Name for Booking
     public function GetCustomerName($id)
     {
        $data=DB::table('users')->where('phone',$id)->get();
        return response()->json($data);
     }
}
