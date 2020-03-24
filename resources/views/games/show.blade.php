@extends('layouts.layout')

@section('content')
<h1 style="text-align: center"> Game Explain </h1>
<hr style="margin-left:45%; margin-right: 45%; border-top: 2px solid black">

<div style="display: flex; justify-content: space-evenly;">
    <div class="col-sm-4">
        <div class="card" style="margin-bottom: 5%">
            <div class="card-body">
                <h5 class="card-title">Title - {{ $game->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Price -  ${{ $game->price }}</h6>
                <p class="card-text">
                    <label>Types: </label>
                    <ul class="list-group"> 
                        @foreach($game->type as $type)
                        <li class="list-group-item">{{ $type }} </li>
                        @endforeach
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>

<div style="text-align: center; margin-top: 2%; margin-bottom: 2%;">
    <a class="btn btn-dark" href="{{ URL::previous() }}" role="button">Go Back</a>
</div>
@endsection