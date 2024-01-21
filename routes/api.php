
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

Route::get('categories', 'App\Http\Controllers\DeviceController@list');// here you don't need to pass an id incase you do it misbehave
Route::get('/CatergoryO/{id?}', 'App\Http\Controllers\DeviceController@listparamOptional');//if an id can be optional at one point you add a "?" at the end of the id, this is this the recommended way
Route::get('/CatergoryC/{id}', 'App\Http\Controllers\DeviceController@list1ParamCopallusaly');// here if you don't pass the id ,it will misbehave
//Return by Name
Route::get('/list/{name}','App\Http\Controllers\DeviceController@getListByName');

//POST API
Route::post('addDevice', 'App\Http\Controllers\PostControler@addData');

//PUT(UPadte methode)
Route::post('addDevice', 'App\Http\Controllers\PostControler@addData');

// Route::get('/Catergory', 'App\Http\Controllers\CategoryController@addcategory')->name('AddCatergory');
