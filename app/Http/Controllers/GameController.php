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

    public function insert()
    {
        $game = new Game();

        $game->name = request('name');
        $game->price = request('price');
        $game->type = request('type');

        //error_log($game);

        $game->save();

        return redirect('/games')->with('message', 'Game Inserted Succesfully');
    }

    public function delete($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect('/games')->with('message', 'Game Deleted Succesfully');
    }
}
