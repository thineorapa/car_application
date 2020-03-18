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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/' ,[
    'uses'=>'CarController@show',
    'as'=>'cars.show'
]);

Route::post('/create' ,[
    'uses'=>'CarController@create',
    'as'=>'cars.create'
]);

Route::get('cars/{car}/delete', 'CarController@destroy');