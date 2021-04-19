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

Route::get('/', 'BlogController@index');
Route::get('/post/{post}','BlogController@show');
Route::get('/add-post','BlogController@addPost');
Route::post('/store', 'BlogController@store');
Route::get('/categoryPage','BlogController@category');
Route::get('/update/{post}','BlogController@update');
Route::patch('/storeupdate/{post}','BlogController@storeUpdate');
Route::post('/post/{post}/comment','CommentController@addComment');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
