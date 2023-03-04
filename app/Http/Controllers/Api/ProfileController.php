<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Claimeddiscount;
use Hash;

class ProfileController extends Controller
{
    public function myProfile($id)
    {
        //$data=User::where('id',$id)->with('discountClaimed')->first();
        $data=User::where('id',$id)->first();
        $cd_count=Claimeddiscount::where('user_id',$id)->count();
        $cd_get=Claimeddiscount::where('user_id',$id)->first();
        if ($data) {
            return response()->json([
                'Profile Info'=>$data,
                'Claimed Discount Total'=>$cd_count,
                'My Discount Show'=>$cd_get,
                200
            ]);
        }else{
            return response()->json(['error'=>'Not Found Data']);
        }
    }

    public function updateProfile(Request $request, $id)
    {   
        $request->validate([
            'phone'=>'unique:users',
        ]);
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

        return response()->json([
            'message'=>"Profile Updated Successfully",
            'user'=>$data,
        ]); 
    }
}
