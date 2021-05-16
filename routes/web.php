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
    return prx("<h1>Welcome to Restorent Project</h1>");
});


Route::group(['middleware'=>'web'],function(){

 Route::get('/home','RestoController@index');

Route::get('/show','RestoController@show');

Route::view('/add','add');
Route::post('/add','RestoController@store');
Route::get('/delete/{id}','RestoController@delete');
Route::get('/edit/{id}','RestoController@edit');
Route::post('/edit','RestoController@update');
Route::view('/register','register');
Route::post('/register','RestoController@register');
Route::view('/login','login');
Route::post('/login','RestoController@login');

});





















