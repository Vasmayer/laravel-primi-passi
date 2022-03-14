<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1>SQUADRE DI CALCIO</h1>
    <ul>
        @foreach($clubs as $club)
            <li>{{$club}}</li>
        @endforeach
    </ul>
</body>
</html>