<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;


// Request
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;




class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all(); 
        return view('comics.index', [
            'comics' => $comics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
        {
        $validatedData = $request->validated();
        $newComicData = $validatedData;

        $comic = New Comic();
        $comic->title =  $newComicData['title'];
        $comic->description =  $newComicData['description'];
        $comic->thumb =  $newComicData['thumb'];
        $comic->price =  $newComicData['price'];
        $comic->series =  $newComicData['series'];
        $comic->sale_date =  $newComicData['sale_date'];
        $comic->type =  $newComicData['type'];
        $explodeArtists = explode(',',$newComicData['artists']);
        $comic->artists = json_encode($explodeArtists);
        $explodeWriters = explode(',',$newComicData['writers']);
        $comic->writers = json_encode($explodeWriters);
        $comic->save();
        dd($comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findorFail($id); 
        return view('comics.show', [
            'comic' => $comic
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.update', compact('comic'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, string $id)
    {
        $validatedData = $request->validated();
    
        $comic = Comic::findOrFail($id);
    
        $comic->title = $validatedData['title'];
        $comic->description = $validatedData['description'];
        $comic->thumb = $validatedData['thumb'];
        $comic->price = $validatedData['price'];
        $comic->series = $validatedData['series'];
        $comic->sale_date = $validatedData['sale_date'];
        $comic->type = $validatedData['type'];
    
        $explodeArtists = explode(',', $validatedData['artists']);
        $comic->artists = json_encode($explodeArtists);
    
        $explodeWriters = explode(',', $validatedData['writers']);
        $comic->writers = json_encode($explodeWriters);
    
        $comic->save();
    
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
