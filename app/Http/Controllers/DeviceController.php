<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;

class DeviceController extends Controller
{
    public function list(){
        return device::all();
    }
}
