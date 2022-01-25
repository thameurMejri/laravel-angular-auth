<?php

use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users/{name?}',function($name = null){
  return 'Hi '. $name;
})->where('name','[a-zA-z]+');
Route::get('product/{id?}',function($id = null){
  return 'product id is '. $id;
})->where('id','[0-9]+');
