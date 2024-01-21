<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;

class DeviceController extends Controller
{
    public function list(){
        return device::all();
    }
    public function listparamOptional($id = null){
        return  $id?device::find($id):device::all();
    }
    public function list1ParamCopallusaly($id){
        return device::find($id);
    }


public function getListByName($name)
{
    $device = Device::where('name', $name)->first();

    if ($device) {
        return response()->json($device);
    } else {
        return response()->json(['message' => 'Device not found.'], 404);
    }
}


}
