<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return view('welcome');
    return view('top');
});

Route::get('/welcome', function () {
    return view('welcome');
//    return view('top');
});

Route::resource('makers', 'masters\MakerController');
Route::resource('micategories', 'masters\MicategoryController');
Route::resource('micategorydtls', 'masters\MicategorydtlController');
Route::resource('icategories', 'masters\IcategoryController');
Route::resource('micrelmicdtl', 'masters\MicrelmicdtlController');
Route::resource('icrelmic', 'masters\IcrelmicController');
Route::resource('mifunctiondtls', 'masters\MifunctiondtlController');
Route::resource('ifunctions', 'masters\IfunctionController');
Route::resource('ifunrelmifunc', 'masters\RelifunmifuncController');
Route::resource('iinterface', 'masters\IinterfaceController');
Route::resource('miinterface', 'masters\MiinterfaceController');
Route::resource('reliinterfacemiinterface', 'masters\ReliinterfacemiinterfaceController');
Route::resource('mitems', 'masters\MitemController');
Route::resource('msupplies', 'masters\MsupplyController');
Route::resource('isupplies', 'masters\IsupplyController');
Route::resource('relisupplymsupply', 'masters\RelisupplymsupplyController');
Route::resource('miqualitycategories', 'masters\MiqualitycategoryController');
Route::resource('iqualitylvls', 'masters\IqualitylvlController');
Route::resource('reliqualitylvlmiqltycategories', 'masters\ReliqualitylvlmiqltycategoryController');
Route::resource('mshops', 'masters\MshopController');
Route::resource('items', 'masters\ItemController');
Route::resource('shelves', 'masters\ShelfController');
Route::resource('locations', 'masters\LocationController');
Route::resource('rellocationshelves', 'masters\RellocationshelfController');

//Route::post('stocklists', 'masters\StocklistController@index');
Route::resource('stocklists', 'masters\StocklistController');



Route::post('stocks/{id}/search', 'masters\StockController@search');
Route::get('stocks/{id}/search', 'masters\StockController@search');

Route::get('stocks/{id}/add', 'masters\StockController@add');
Route::get('stocks/{id}/{itemid}/editor', 'masters\StockController@editor');
Route::get('stocks/{id}/new', 'masters\StockController@new');


Route::resource('stocks', 'masters\StockController');

//Route::get('makers/create', 'masters\MakersController@create');
