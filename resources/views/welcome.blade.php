<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-12">
                <h2>Titolo: {{$movie->title}}</h2>
                <div>Data: {{$movie->date}}</div>
                <div>voto: {{$movie->vote}}</div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>