<?php

use App\Models\Permission;
use Illuminate\Support\Facades\Auth;

    function checkPermission($pName,$value){
       $data = Permission::where([
            'user_id' => Auth::user()->id,
            'permission_name' => $pName,
            'value' => $value,
            ])->exists();
        if($data){
            return true;
        }else{
            return false;
        }
    }
   

?>
 