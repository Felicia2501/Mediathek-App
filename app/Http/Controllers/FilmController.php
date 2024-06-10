<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Film;

use App\Models\Genre;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subs = Film::all();
        return view('films.index', ['subs' => $subs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $film = new Film();
        return view('films.create',['sub' => $film]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        //
        $validated = $request->validated();
        $film = new Film($validated);
        $film->save();
        return redirect()->route('films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        //
        return view('films.show',['sub'=>$film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
        return view('films.edit', ['sub' => $film,'gnrs'=>Genre::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        //
        $validated = $request->validated();
        $film->update($validated);
        return redirect()->back()->with('message', 'Hat geklappt!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }
}
