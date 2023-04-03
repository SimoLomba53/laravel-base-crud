<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     @vite('resources/js/app.js')
</head>
<body> 
    <div class="text-center d-flex flex-column align-items-center justify-content-center">
    <h1>TITOLO:</h1>
    <h3>{{$song->title}}</h3>
    <h1>ALBUM:</h1>
    <h3>{{$song->album}}</h3>
    <h1>AUTORE:</h1>
    <h3>{{$song->author}}</h3>
    </div>
</body>
</html>