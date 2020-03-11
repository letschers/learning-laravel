<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {

        $games = [
            ['name' => 'God of War', 'type' => 'Hack and Slash', 'price' => '$ 50'],
            ['name' => 'Dark Souls', 'type' => 'Soulsgame', 'price' => '$ 30'],
            ['name' => 'New Dawn', 'type' => 'Horror', 'price' => '$ 15'],
            ['name' => 'Dead Cells', 'type' => 'Roguelite', 'price' => '$ 40'],
        ];

        return view('games', [
            'games' => $games,
            'name' => request('name'),
        ]);
    }

    public function show($id)
    {

        //use $id variable to query on db and display on view
        return view('details', ['id' => $id]);
    }
}
