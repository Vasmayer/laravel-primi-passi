<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <header>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('clubs')}}">Clubs</a>
        <a href="{{route('match')}}">Partite</a>
    </header>
    <h1>SQUADRE DI CALCIO</h1>
    <ul>
        @foreach($clubs as $club)
            <li>{{$club}}</li>
        @endforeach
    </ul>

    
</body>
</html>