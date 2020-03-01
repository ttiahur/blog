<?php

use App\Http\Controllers\TopicController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/topics',TopicController::class);

Route::resource('/tags', TagController::class);

Route::resource('/posts', PostController::class);
