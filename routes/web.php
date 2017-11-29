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
//profile and standard site
Route::redirect("/" , "/home" );
Route::get("/profile{id}", "auctionController@profile");
Route::get("/auctions", "auctionController@auctions");
Route::get("/home", "auctionController@home");
//auctions
Route::get("/auction/{id}", "auctionController@uppbod");

//new auction
Route::get("/newauction", "auctionController@nyttuppbod");
Route::post("/auctions", "auctionController@newauction");

Auth::routes();

