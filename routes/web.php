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

Route::get('/', 'StoreController@index');
Route::get('/post/{post}','StoreController@show');
Route::get('/add-post','StoreController@addPost');
Route::post('/store', 'StoreController@store');
Route::get('/category-page','StoreController@category');
Route::get('/delete/{post}','StoreController@delete');
Route::get('/update/{post}','StoreController@update');
Route::patch('/storeupdate/{post}','StoreController@storeUpdate');
Route::post('/post/{post}/comment','CommentController@addComment');
Route::get('/table','StoreController@table');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
