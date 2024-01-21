
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("data",[dummyAPI::class,'returnData']);
Route::get('categories', 'App\Http\Controllers\DeviceController@list');
Route::get('/Catergory/{id?}', 'App\Http\Controllers\DeviceController@list1');//if an id can be optional at one point you add a "?" at the end of the id
Route::get('/Catergory/{id}', 'App\Http\Controllers\DeviceController@list1ParamCopallusaly');//
// Route::get('/Catergory', 'App\Http\Controllers\CategoryController@addcategory')->name('AddCatergory');
