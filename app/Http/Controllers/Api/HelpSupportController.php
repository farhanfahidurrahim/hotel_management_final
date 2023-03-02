<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\HelpAndSupport;
use App\Http\Controllers\Controller;

class HelpSupportController extends Controller
{
    public function index()
    {
        $data=HelpAndSupport::get();
        if ($data) {
            return response()->json([
                'message'=>'Successfully Found Data!',
                'About-Us'=>$data,
                200
            ]);
        }else{
            return response()->json([
                'message'=>'Not Found Data!',
            ]);
        }
    }
}
