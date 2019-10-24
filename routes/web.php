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

// Route::get('home', function()
// {
//     return view('dasboard/home');
// });

Route::get('formproduct', function()
{
    return view('dasboard/formproduct');
});

Route::get('formcustomer', function()
{
    return view('dasboard/formcustomer');
});

// controller blog

Route::get('/menuutama', 'BlogController@index');
Route::get('/menuutama/{id}', 'BlogController@show');

//Custommer blog

Route::get ('/custommer', 'CustommerController@index');
Route::get('/custommer/{id}', 'CustommerController@show');

// Order

Route::get('/home', 'OrderController@index');
Route::get('/home/{id}', 'OrderController@show');