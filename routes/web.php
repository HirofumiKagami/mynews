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
    return view('welcome');
    
    
});
Route::group(['prefix' => 'admin'], function() {
    //PHP/Laravel 09 Routingについて理解する テキスト内 追加指示項目
    Route::get('news/create', 'Admin\NewsController@add');
    ////PHP/Laravel 09 Routingについて理解する　課題3
    Route::get('XXX/XXX', 'XXX\AAAController@bbb');
    //PHP/Laravel 09 Routingについて理解する 課題4【応用】
    Route::get('profile/create', 'Admin\ProfileContoroller@add');
    Route::get('profile/edit', 'Admin\ProfileContoroller@edit');
});