<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;
class PostControler extends Controller
{
    public function addData(Request $data){
        $device =new device();

        $device->name= $data->name;
        $device->number_id =$data->number_id;
        $result = $device->save;
        if($result){
            return ["Result"=>"Data has been saved sucessfully"];
        }else{
            return ["Result"=>"Data not saved"];
        }
    }
}
