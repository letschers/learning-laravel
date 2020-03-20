@extends('layouts.layout')

@section('content')
<h1 style="text-align: center"> Game Explain </h1>
<hr style="margin-left:45%; margin-right: 45%; border-top: 2px solid black">

<div style="display: flex; justify-content: space-evenly;">
    <div class="card">
        <p> Name: {{ $game->name }} </p>
        <p> Type: {{ $game->type }} </p>
        <p> Price: {{ $game->price }} </p>
    </div>
</div>

<div style="text-align: center; margin-top: 2%; margin-bottom: 2%;">
    <a class="btn btn-dark" href="{{ URL::previous() }}" role="button">Go Back</a>
</div>
@endsection