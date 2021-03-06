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

// middleware runs your routes through middle validations such http request validaition, form validations etc.

Route::group(['middleware' => ['web']], function() {
  Route::get('/', 'PagesController@home');
  Route::get('/about', 'PagesController@about');
  Route::get('/cards', 'CardsController@index');
  Route::get('/cards/{card}', 'CardsController@show');
  Route::post('/cards/{card}/hints', 'HintsController@store');
  Route::get('/hints/{hint}/edit/', 'HintsController@edit');
  Route::patch('/hints/{hint}', 'HintsController@update');
});
