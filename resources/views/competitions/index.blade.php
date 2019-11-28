@extends('layout')
@section('container')
    <div class="container">
        <h1> Competitions</h1>
        <p><a href="{{route('index')}}">Regresar</a></p>
        @if($competitions)
            @foreach($competitions as $competition)
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('detallecompetition',$competition['id'])}}"><p>
                                <strong>Name:</strong>{{ $competition['name'] }}</p></a>
                        <p><strong>Plan:</strong>{{ $competition['plan'] }}</p>
                        <p><strong>Code:</strong>{{ $competition['code'] ? $competition['code']:'Null' }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
