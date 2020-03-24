@extends('layouts.layout')

@section('content')
<h1 style="text-align: center"> Add New Game</h1>
<hr style="margin-left:45%; margin-right: 45%; border-top: 2px solid black">

<form style="padding-left: 20%; padding-right: 20%; margin-bottom: 5%;" action="/games" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter game's name">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.010" class="form-control" id="price" name="price" placeholder="5">
    </div>
    <fieldset>
        <label for="type">Type</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="type[]" value="Roguelite">
            <label class="form-check-label" for="roguelite">
                Roguelite
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="type[]" value="Hack and Slash">
            <label class="form-check-label" for="hackandslash">
                Hack and Slash
            </label>
        </div>
        <div class="form-check disabled">
            <input class="form-check-input" type="checkbox" name="type[]" value="Indie">
            <label class="form-check-label" for="indie">
                Indie
            </label>
        </div>
        <div class="form-check disabled">
            <input class="form-check-input" type="checkbox" name="type[]" value="Souls Like">
            <label class="form-check-label" for="indie">
                Souls Like
            </label>
        </div>
    </fieldset>
    <button type="submit" value="Create Game" class="btn btn-dark">Add Game</button>
</form>

@endsection