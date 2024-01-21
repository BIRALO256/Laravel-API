<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    public function returnData(){
            return ["name"=>"jovic","email"=>"dearjovic@gmail.com","address"=>"kikoni","phone nummber"=>"078888888"];
            
    }
}
