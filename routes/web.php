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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('createblog','blogController@createblog');
// Route::get('display/{title}/{category}','blogController@display');
// Route::get('blogDetails','blogController@displayblog');
//task
Route::get('register','registerController@display');
Route::post('storeUser','registerController@storeUser');
Route::get('displayusers','registerController@displayUsers');
Route::get('deleteuser/{id}','registerController@deleteUser');

