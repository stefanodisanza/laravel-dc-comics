<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', ['comics' => $comics]);
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        $comics = Comic::all();

        return view('comics.show', ['comic' => $comic, 'comics' => $comics]);
    }


    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        // Validazione dei dati inviati tramite il form
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required',
            'type' => 'required',
            'sale_date' => 'required|date',
        ]);

        // Creazione di un nuovo record nel database
        $comic = new Comic();
        $comic->title = $request->input('title');
        $comic->description = $request->input('description');
        $comic->thumb = $request->input('thumb');
        $comic->price = $request->input('price');
        $comic->series = $request->input('series');
        $comic->type = $request->input('type');
        $comic->sale_date = $request->input('sale_date');
        $comic->save();

        return redirect('/comics')->with('success', 'Fumetto creato con successo!');
    }

    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', ['comic' => $comic]);
    }

    public function update(Request $request, $id)
    {
        // Validazione dei dati inviati tramite il form
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required',
            'type' => 'required',
            'sale_date' => 'required|date',
        ]);

        // Modifica del record nel database
        $comic = Comic::find($id);
        $comic->title = $request->input('title');
        $comic->description = $request->input('description');
        $comic->thumb = $request->input('thumb');
        $comic->price = $request->input('price');
        $comic->series = $request->input('series');
        $comic->type = $request->input('type');
        $comic->sale_date = $request->input('sale_date');
        $comic->save();

        return redirect('/comics')->with('success', 'Fumetto modificato con successo!');
    }


    public function destroy($id)
    {
        // Trova il record del fumetto da eliminare
        $comic = Comic::find($id);

        // Elimina il record dal database
        $comic->delete();

        return redirect('/')->with('success', 'Fumetto eliminato con successo!');
    }
}
