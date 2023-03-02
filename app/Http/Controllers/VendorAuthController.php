<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorAuthController extends Controller
{
    public function vendorLogin(){
        return view('vendor.auth.login');
    }

    public function vendorLoginSubmit(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]); 


        $credentials = $request->only('email', 'password');  //only email and passoword are now stored in credentials variable

        // dd($credentials);
        if (Auth::attempt($credentials)) {
         
            $request->session()->regenerate();
            
            if (auth()->user()->role == 'vendor') 
            { 
               $status = User::where('id',auth()->user()->id)->first();
            //    return $status;
                $status->update(['status' => '1']);
                // return 'dashboard';
                return redirect()->route('index');
            } 
            
        }

        return back()->withErrors([
            'email' => 'Wrong Email Or Password!',
        ]);
    }


    public function vendorLogout()
    {
        if(auth()->user()->role == 'vendor')
        {
            $status = User::where('id', auth()->user()->id);
            $status->update([
                'status'=> '0'
            ]);
        }
        Auth::logout();
        return redirect()->route('vendorLogin');

    }
}
