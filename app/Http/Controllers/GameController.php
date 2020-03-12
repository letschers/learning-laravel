<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
    public function games()
    {

       $games = Game::all();
       //$games = Game::orderBy('name', 'desc')->get();
       //$games = Game::where('name', 'Dark Souls')->get();
       //$games = Game::latest();

        return view('games.games', [
            'games' => $games,
        ]);
    }

    public function show($id)
    {
        //use $id variable to query on db and display on view
        $game = Game::findOrFail($id); 
        return view('games.show', ['game' => $game]);
    }

    public function create()
    {

        return view('games.create');

    }
}
