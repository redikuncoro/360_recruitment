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

Route::get('/login', 'UserController@viewLogin');
Route::post('/login', 'UserController@login');

Route::get('/register', 'UserController@viewRegister');
Route::post('/register', 'UserController@register');

Route::group(['middleware' => 'App\Http\Middleware\AuthUserMiddleware'], function ($route){
  Route::get('/logout', 'UserController@logout');
  Route::get('/', 'DashboardController@homePage');
  Route::group(['prefix' => 'car'], function ($route){
    $route->get('/create','CarController@viewCreate');
    $route->post('/create','CarController@create');
    $route->get('/{id}/update','CarController@viewUpdate');
    $route->post('/{id}/update','CarController@update');
    $route->get('/{id}/delete','CarController@delete');
  });
  Route::group(['prefix' => 'sell'], function ($route){
    $route->post('/','TransactionController@sell');

  });
});
// Route::get('/', function () {
//     return view('welcome');
// });
