<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;

class DeviceController extends Controller
{
    public function list(){
        return device::all();
    }
    public function list1($id){
        return device::find($id);
    }
}
