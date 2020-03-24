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
    return view('index');
});

Route::get('/games', 'GameController@games');
Route::get('/games/create', 'GameController@create');
Route::post('/games', 'GameController@insert');
Route::get('/games/{id}', 'GameController@show');
Route::delete('/games/{id}', 'GameController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
