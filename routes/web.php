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

Route::resource('makers', 'masters\MakerController');
Route::resource('micategories', 'masters\MicategoryController');
Route::resource('micategorydtls', 'masters\MicategorydtlController');
Route::resource('icategories', 'masters\IcategoryController');
Route::resource('micrelmicdtl', 'masters\MicrelmicdtlController');
Route::resource('icrelmic', 'masters\IcrelmicController');
Route::resource('mifunctiondtls', 'masters\MifunctiondtlController');
Route::resource('ifunctions', 'masters\IfunctionController');


//Route::get('makers/create', 'masters\MakersController@create');
