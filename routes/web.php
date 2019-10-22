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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('menuutama', function()
// {
//     return view('blog/menuutama');
// });

Route::get('home', function()
{
    return view('dasboard/home');
});

// controller blog

Route::get('/menuutama', 'BlogController@index');
Route::get('/menuutama/{id}', 'BlogController@show');

//Custommer blog

Route::get ('/custommer', 'CustommerController@index');
Route::get('/custommer/{id}', 'CustommerController@show');