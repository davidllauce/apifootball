
@extends('layout')
@section('container')
    <div class="container">
        <h1>Teams</h1>
        <a href="{{route('index')}}">Regresar</a>

        @foreach($teams as $team)
            <div class="card">
                <div class="card-header">
                    <p><strong>Short Name:</strong>{{ $team->shortName }}</p>
                    <p><strong>Name:</strong>{{ $team->name}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
