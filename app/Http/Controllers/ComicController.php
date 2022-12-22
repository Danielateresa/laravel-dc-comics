<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Comic::all());
        //inserisco il nuovo record all'inizio
        $comics = Comic::orderByDesc('id')->get();

        return view('index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        //dd($request->all());
        //salvare i nuovi dati immessi come array associativo
        $data =[
            'title'=> $request['title'],
            'description'=> $request['description'],
            'thumb'=> $request['thumb'],
            'price'=> $request['price'],
            'series'=> $request['series'],
            'sale_date'=> $request['sale_date'],
            'type'=> $request['type']
        ];
        Comic::create($request->all());
        //reindirizzamento alla rotta index dopo l'add del nuovo comic
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data =[
            'title'=> $request['title'],
            'description'=> $request['description'],
            'thumb'=> $request['thumb'],
            'price'=> $request['price'],
            'series'=> $request['series'],
            'sale_date'=> $request['sale_date'],
            'type'=> $request['type']
        ];

        $comic->update($data);
        return to_route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('index');
    }
}