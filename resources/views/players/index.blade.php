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

</body>
</html>
