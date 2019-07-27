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
Route::get('/', 'DashboardController@homePage');

Route::get('/login', 'UserController@viewLogin');
Route::post('/login', 'UserController@login');

Route::get('/register', 'UserController@viewRegister');
Route::post('/register', 'UserController@register');

// Route::get('/', function () {
//     return view('welcome');
// });
