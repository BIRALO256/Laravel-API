<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;
class PostControler extends Controller
{
    public function addData(Request $request)
    {
        // Validate the request data if needed

        $existingDevice = Device::where('name', $request->name)
                                ->orwhere('number_id', $request->number_id)
                                ->first();

        if ($existingDevice) {
            return ["Result" => "Duplicate data: Device with the same name or number_id already exists"];
        }

        $device = new Device();

        $device->name = $request->name;
        $device->number_id = $request->number_id;

        $result = $device->save();

        if ($result) {
            return ["Result" => "Data has been saved successfully"];
        } else {
            return ["Result" => "Data not saved"];
        }
    }
}
