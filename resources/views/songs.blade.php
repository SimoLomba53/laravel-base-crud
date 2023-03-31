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
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">album</th>
      <th scope="col">author</th>
      <th scope="col">DETAILS</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($songs as $song)
    <tr>
      <th scope="row">{{$song->id}}</th>
      <td>{{$song->title}}</td>
      <td>{{$song->album}}</td>
      <td>{{$song->author}}</td>
      <td><a href="{{route('songs.show'),$song}}">DETAILS</a></td>
    </tr>
     @endforeach
  </tbody>
</table>
</body>
</html>