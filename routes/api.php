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

Route::get('/items', 'ApiController@items');
Route::get('/items/{id}', 'ApiController@item');
Route::get('/relmitemsitems/{id}', 'ApiController@relmitemsitems');
Route::get('/getMsupplies/{id}', 'ApiController@getMsupplies');
Route::get('/getMshops/', 'ApiController@getMshops');
Route::get('/getMshops/{id}', 'ApiController@getMshop');
Route::get('/getQualities/', 'ApiController@getQualitys');
Route::get('/getQualities/{id}/', 'ApiController@getQuality');
Route::get('/getQCategories/{id}/', 'ApiController@getQCategories');
Route::get('/relitems/{id}/', 'ApiController@relitems');
Route::get('/relSupplyid/{id}/', 'ApiController@relSupplyid');
Route::get('/getMQuality/{id}/', 'ApiController@getMQuality');
Route::get('/relmitemsitemPages/{id}/', 'ApiController@relmitemsitemPages');
Route::get('/getshelves/', 'ApiController@getShelves');
Route::get('/getlocations/{id}/', 'ApiController@getLocations');
Route::get('/stockCounter/{id}/', 'ApiController@stockCounter');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

