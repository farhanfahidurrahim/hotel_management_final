<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user=Auth::user();
            $token=$user->createToken('app')->accessToken;

            return response()->json([
                'message'=>"Successfully Login",
                'token'=>$token,
                'user'=>$user
            ]);
        }

        return response()->json([
            'message'=> "Invalid Email or Password",
        ]); 
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'phone'=>'required|unique:users',
            'dob'=>'required',
            'image'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'prefer'=>'required',
            'status'=>'required',
            'password'=>'required|confirmed|min:6',
        ]);

        $data=$request->all();

        //Working with Image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('file/customer/images/'),$filename);

            $data['image'] = $filename;
        }

        $user=User::create([
            'name'=>$request->name,
            'role'=>'customer',
            'email'=>$request->email,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'image' => $data['image'],
            'address'=>$request->address,
            'password'=>Hash::make($request->password),
            'prefer'=>$request->prefer,
            'status'=>$request->status,
        ]);
        $token=$user->createToken('app')->accessToken;

        return response()->json([
            'message'=>"Registration Successfully",
            'token'=>$token,
            'user'=>$user,
        ]);
    }

    public function user()
    {
        return Auth::user();
    }
}
