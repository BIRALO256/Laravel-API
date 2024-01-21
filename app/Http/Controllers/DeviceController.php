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
}
