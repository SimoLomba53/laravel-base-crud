<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has("term")){
            $term=$request->get('term');
            $songs=Song::where('title','album',"%$term%")->paginate(10);
        }else{
            $songs=Song::paginate(10);
        }
        return view('songs.index',compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
        'title'=>'required|string|max:50',
        'album'=>'required|string|max:30',
        'author'=>'required|string|max:30',
        'editor'=>'required|string|max:30',
        'length'=>'required|integer',
        'poster'=>'required|string',

    ],[
        'title.required'=>"il titolo è obbligatorio",
        'title.string'=>"il titolo è dev'essere una stringa",
        'title.max'=>"il titolo dev'essere massimo 50 caratteri",

        'album.required'=>"l'album è obbligatorio",
        'album.string'=>"l'album è dev'essere una stringa",
        'album.max'=>"l'album dev'essere massimo 30 caratteri",

        'author.required'=>"l'autore è obbligatorio",
        'author.string'=>"l'autore è dev'essere una stringa",
        'author.max'=>"l'autore dev'essere massimo 30 caratteri",

        'editor.required'=>"l'editore è obbligatorio",
        'editor.string'=>"l'editore è dev'essere una stringa",
        'editor.max'=>"l'editore dev'essere massimo 30 caratteri",

        'length.required'=>"la durata è obbligatoria",
        'length.integer'=>"la durata dev'essere un' numero",

        'poster.required'=>"il poster è obbligatorio",
        'poster.string'=>"il poster è dev'essere una stringa",
        
    ]  
    );


        $data=$request->all();

        $song=new Song;
        $song->title=$data['title'];
        $song->album=$data['album'];
        $song->author=$data['author'];
        $song->editor=$data['editor'];
        $song->length=$data['length'];
        $song->poster=$data['poster'];
        $song->save();

        return redirect()->route('songs.show',$song);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('songs.show',compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
         return view('songs.edit',compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Song $song)
    {
        $request->validate([
        'title'=>'required|string|max:50',
        'album'=>'required|string|max:30',
        'author'=>'required|string|max:30',
        'editor'=>'required|string|max:30',
        'length'=>'required|integer',
        'poster'=>'required|string',

    ],[
        'title.required'=>"il titolo è obbligatorio",
        'title.string'=>"il titolo è dev'essere una stringa",
        'title.max'=>"il titolo dev'essere massimo 50 caratteri",

        'album.required'=>"l'album è obbligatorio",
        'album.string'=>"l'album è dev'essere una stringa",
        'album.max'=>"l'album dev'essere massimo 30 caratteri",

        'author.required'=>"l'autore è obbligatorio",
        'author.string'=>"l'autore è dev'essere una stringa",
        'author.max'=>"l'autore dev'essere massimo 30 caratteri",

        'editor.required'=>"l'editore è obbligatorio",
        'editor.string'=>"l'editore è dev'essere una stringa",
        'editor.max'=>"l'editore dev'essere massimo 30 caratteri",

        'length.required'=>"la durata è obbligatoria",
        'length.integer'=>"la durata dev'essere un' numero",

        'poster.required'=>"il poster è obbligatorio",
        'poster.string'=>"il poster è dev'essere una stringa",
        
    ]  
    );
      $data=$request->all();
      $song->update($data);
      return redirect()->route('songs.show',$song);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
