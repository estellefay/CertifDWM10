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

/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', "NavController@home");

//Show article 
Route::get('/show', "NavController@show");

//Delete article
Route::post('/deleteOne', "ArticleController@deleteOne");

//Insert Article
Route::get('/insertOne', "NavController@insertOne");
Route::post('/insertOneAction', "ArticleController@insertOneAction");

//Update article
Route::post('/updateOne', "NavController@updateOne");
Route::post('/updateOneAction',"ArticleController@updateOneAction");   


//Stock 
Route::get('/stock', "NavController@showStock");

//Stock update amount
Route::post('/updateAmount', "NavController@updateAmount");
Route::post('/updateAmountAction', "ArticleController@updateAmountAction" );

//Deliveries
Route::get('/deliveries');