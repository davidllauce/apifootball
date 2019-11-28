@extends('layout')
@section('container')
    <div class="container">
        <h1>Players</h1>
        <a href="{{route('index')}}">Regresar</a>

        @foreach($players as $player)
            <div class="card">
                <div class="card-header">
                    <p><strong>Name:</strong>{{ $player->name}}</p>
                    <p><strong>Shirt Name:</strong>{{ $player->shirtName ? :' Null' }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
