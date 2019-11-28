@extends('layout')
@section('container')
    <div class="container">
        <h1> Competitions Details</h1>
        <a href="{{route('competitions')}}">Regresar</a>
        <div class="card">
            <div class="card-header">
                <p><strong>Teams:</strong></p>
                @if($teams)
                    @foreach($teams as $team)
                        <a href="{{route('detalleteamcompetition',$team['id'])}}"><p>{{ $team['name'] }}</p></a>
                    @endforeach
                @else
                    <p> Not details</p>
                @endif
            </div>
        </div>

    </div>
@endsection
