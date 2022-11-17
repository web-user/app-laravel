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
    return 'heLLO WORLD';
});

// Route::get('post/{id}', 'App\Http\Controllers\MyPlaceController@index');

Route::get('posts/{id}', 'App\Http\Controllers\PostController@index');