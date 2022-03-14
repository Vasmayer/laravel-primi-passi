<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Match</title>
</head>
<body>
    <header>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('clubs')}}">Clubs</a>
        <a href="{{route('match')}}">Partite</a>
    </header>
    <h1>LISTA DELLE PARTITE</h1>
    <ul>
        @foreach($matches as $match)
            <li>{{$match['first']}} VS {{$match['second']}}</li>
        @endforeach
    </ul>
    
</body>
</html>