<?php

use Illuminate\Support\Facades\Route;

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


//1
Route::get('/', 'App\Http\Controllers\MainController@index')->name('home');


//2
Route::get('/create', 'App\Http\Controllers\MainController@create')->name('create');

//ItemController POST

Route::post('/createitem',  'App\Http\Controllers\ItemController@create')->name('createImg');



//3
Route::get('/item-details/{id}','App\Http\Controllers\MainController@itemDetail')->name('itemDetail'); 

//4
Route::get('/item-details/{id}/edit','App\Http\Controllers\MainController@edit')->name('edit');

//5
Route::get('/item-details/{id}/delete','App\Http\Controllers\MainController@delete')->name('delete');

//Update Info POST
//6
Route::post('/item-details/{id}/upload','App\Http\Controllers\MainController@updateSave')->name('updatesave');





