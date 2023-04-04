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
   <div>
    <div>
     <form class="d-flex flex-row col-6 offset-3 p-5">
      <input type="text" class="form-control" name="term" id="formGroupExampleInput" placeholder="Example input">
      <button type="submit" class="btn btn-primary">Search</button>
     </form>
    </div>
    <div class="d-flex justify-content-center p-2">
      <a href="{{route('songs.create')}}" type="button" class="btn btn-primary">Create Song</a>
    </div>
   </div>
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
      <td class="d-flex flex-row gap-3"><a href="{{route('songs.show', $song)}}">DETAILS</a>
          <a href="{{route('songs.edit', $song)}}">MODIFICA</a>

          <form action="{{route('songs.destroy', $song)}}" method="POST">
            @method('delete')
            @csrf
             

            <button class="text-danger border-0">DELETE</button>
        </form>
      </td>
    </tr>
     @endforeach
  </tbody>
</table>
{{ $songs->links("pagination::bootstrap-5") }}
</body>
</html>