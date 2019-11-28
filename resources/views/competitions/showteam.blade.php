@extends('layout')
@section('container')
    <div class="container">
        <h1> Players </h1>
        <a href="{{route('competitions')}}">Regresar</a>

        @if($squad)
            <div class="card">
                <div class="card-header">
                    <p><strong>Players:</strong></p>
                    @if($squad)
                        @foreach($squad as $player)
                            <p>{{ $player['name'] }}</p></a>
                        @endforeach
                    @endif
                </div>
            </div>
        @else
            <div class="card">
                <div class="card-header">
                    <p> Not details</p>
                </div>
            </div>
        @endif
    </div>
@endsection
