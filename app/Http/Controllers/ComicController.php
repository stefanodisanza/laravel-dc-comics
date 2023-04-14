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
        $comic = Comic::find($id);
        return view('comics.show', ['comic' => $comic]);
    }

    public function create()
    {
        return view('comics.create');
    }
}
