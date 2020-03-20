@extends('layouts.layout')

@section('content')
<p> {{ session('message')}} </p>

<h1 style="text-align: center"> Games List </h1>
<hr style="margin-left:45%; margin-right: 45%; border-top: 2px solid black">

<div style="text-align: center; margin-bottom: 1%">
    <a class="btn btn-dark" href="/games/create" role="button">Create Game</a>
</div>
   
<div class="container">
    <div class="row">
        @foreach($games as $game)
            <div class="col-sm-4"> 
                <div class="card" style="margin-bottom: 5%">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted"> ${{ $game->price }}</h6>
                        <p class="card-text">{{ $game->type }}</p>
                        <a class="btn btn-dark" href="{{ URL::current() . '/' . $game->id }}" role="button">See More</a>
                    </div>
                </div>      
            </div>
        @endforeach 
    </div>
</div>
<!--@for($i = 0; $i < count($games); $i++)
    <div>
    <p> {{ $games[$i]['name'] }} </p>
    <p> {{ $games[$i]['type'] }} </p>
    <p> {{ $games[$i]['price'] }} </p>
    </div>
@endfor -->

@endsection