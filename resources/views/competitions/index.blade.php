<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
          integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <title>Competitions</title>
</head>
<body>

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

</body>
</html>
