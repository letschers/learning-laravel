@extends('layouts.layout')

@section('content')
<h1 style="text-align: center"> Games List </h1>
<hr style="margin-left:45%; margin-right: 45%; border-top: 2px solid black">

<div style="display: flex; justify-content: space-evenly;">



    @foreach($games as $game)

        @if($name == $game['name'])
            <div class="card">
                <p> {{ $game['name'] }} </p>
                <p> {{ $game['type'] }} </p>
                <p> {{ $game['price'] }} </p>
            </div>
        @endif
        
        
    @endforeach

    <!--@for($i = 0; $i < count($games); $i++)
        <div>
        <p> {{ $games[$i]['name'] }} </p>
        <p> {{ $games[$i]['type'] }} </p>
        <p> {{ $games[$i]['price'] }} </p>
        </div>
    @endfor -->
</div>
@endsection