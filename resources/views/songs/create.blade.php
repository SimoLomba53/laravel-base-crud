<h1 class="text-center">CREA UNA NUOVA CANZONE</h1>
@vite('resources/js/app.js')

<form action="{{route('songs.store')}}" method="POST">
    @csrf
<div class="col-6 offset-3">
 <div>
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title')}}">
     @error('title')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
 </div>
 <div>
    <label for="album" class="form-label">Album</label>
    <input type="text" class="form-control  @error('album') is-invalid @enderror" id="album" name="album" value="{{ old('album')}}">
    @error('album')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
 </div>
 <div>
    <label for="author" class="form-label">Autore</label>
    <input type="text" class="form-control  @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author')}}">
    @error('author')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
 </div>
 <div>
    <label for="editor" class="form-label">Editore</label>
    <input type="text" class="form-control  @error('editor') is-invalid @enderror" id="editor" name="editor" value="{{ old('editor')}}">
    @error('editor')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
 </div>
 <div>
    <label for="length" class="form-label">Lunghezza</label>
    <input type="number" class="form-control  @error('length') is-invalid @enderror" id="length" name="length" value="{{ old('length')}}">
    @error('length')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
 </div>
 <div>
    <label for="poster" class="form-label">Poster</label>
    <input type="text" class="form-control  @error('poster') is-invalid @enderror" id="poster" name="poster" value="{{ old('poster')}}">
    @error('poster')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
 </div>
 <div>
    <button type="submit" class="btn btn-primary">Salva</button>
 </div>
</div>
</form>