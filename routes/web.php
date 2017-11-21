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

Route::redirect("/" , "/home" );
Route::get("/home", "auctionController@home");
Route::get("/auction/{id}", "auctionController@uppbod");
Route::get("/profile{id}", "auctionController@profile");

Auth::routes();

