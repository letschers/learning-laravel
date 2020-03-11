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
    
    $games =[
        [ 'name' => 'God of War', 'type' => 'Hack and Slash',  'price' => '$ 50'],
        [ 'name' => 'Dark Souls', 'type' => 'Soulsgame',  'price' => '$ 30'],
        [ 'name' => 'New Dawn', 'type' => 'Horror',  'price' => '$ 15'],
        [ 'name' => 'Dead Cells', 'type' => 'Roguelite',  'price' => '$ 40']
    ];

    return view('games', [
        'games' => $games,
        'name' => request('name')
        ]);
});