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

Route::get('/games', function () {
    $game = [ 
        'name' => 'God of War', 
        'type' => 'Hack and Slash', 
        'price' => '$ 50' 
    ];

    return view('games', $game);
});