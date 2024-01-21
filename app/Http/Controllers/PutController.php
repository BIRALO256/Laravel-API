<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;

class PutController extends Controller
{
    public function UpdateData(Request $update){
        $device =device::find($update->id);
        $device->name=$update->name;
        $device->number_id=$update->number_id;
        $result =$device->save();
        if($result){
            return ["result"=>"data is been updated"];
        }
        else{
            return ["result"=>"data not updated"];
        }

    }
}
