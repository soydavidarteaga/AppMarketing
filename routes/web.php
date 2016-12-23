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

Auth::routes();
Route::group(['prefix' => 'app'],function(){
  Route::resource('/Agenda','GroupController');
  Route::get('/Contacto/create/{id}','ContactController@create');
  Route::post('/Contacto/store','ContactController@store');
  Route::get('/Contacto/destroy/{id}','ContactController@destroy');
});
Route::get('/home', 'HomeController@index');
