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


Route::get('/',['as'=>'admin.home','uses'=>'AdminController@index']);
Route::get('/dataset',['as'=>'admin.dataset','uses'=>'AdminController@dataset']);
Route::get('/dataedit/{id}',['as'=>'admin.data.edit','uses'=>'AdminController@edit']);
Route::post('/delete/{id}',['as'=>'admin.data.delete','uses'=>'AdminController@delete']);
