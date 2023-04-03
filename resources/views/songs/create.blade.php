<h1 class="text-center">CREA UNA NUOVA CANZONE</h1>
@vite('resources/js/app.js')

<form action="{{route('songs.store')}}" method="POST">
    @csrf
<div class="col-6 offset-3">
 <div>
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" id="title" name="title">
 </div>
 <div>
    <label for="album" class="form-label">Album</label>
    <input type="text" class="form-control" id="album" name="album">
 </div>
 <div>
    <label for="author" class="form-label">Autore</label>
    <input type="text" class="form-control" id="author" name="author">
 </div>
 <div>
    <label for="editor" class="form-label">Editore</label>
    <input type="text" class="form-control" id="editor" name="editor">
 </div>
 <div>
    <label for="length" class="form-label">Lunghezza</label>
    <input type="number" class="form-control" id="length" name="length">
 </div>
 <div>
    <label for="poster" class="form-label">Poster</label>
    <input type="text" class="form-control" id="poster" name="poster">
 </div>
 <div>
    <button type="submit" class="btn btn-primary">Salva</button>
 </div>
</div>
</form>