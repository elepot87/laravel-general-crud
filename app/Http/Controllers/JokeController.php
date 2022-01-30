<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Joke;

class JokeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jokes = Joke::all();

        return view('jokes.index', compact('jokes'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jokes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // Inserimento nel DB_DATABASE
        $new_joke = new Joke();
        // // Generazione slug
        $data['slug'] = Str::slug($data['title'], '-');
        // // mass assignment 
        $new_joke->fill($data); //Fare fillable nel model
        $new_joke->save();
        // //  redirect verso pagina dettaglio
        return redirect()->route('jokes.show', $new_joke->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $joke = Joke::where('slug', $slug)->first();

        if($joke) {
            return view('jokes.show', compact('joke'));
        }
        abort(404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // Ottenere joke da aggiornare
        $joke = Joke::find($id);
        // Passare il fumetto specifico alla form di edit
        if($joke) {
            return view('jokes.edit', compact('joke'));
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // colleziono dati che arrivano dal form
        $data = $request->all();
        // 1.Ottenere il record da aggiornare 
        $joke = Joke::find($id);
        // 2. Aggiornare le colonne e salvare i dati a db
        $data['slug'] = Str::slug($data['title'], '-'); // Adattiamo slug nel caso qualcuno modifichi il title
        $joke->update($data); //save() not require
        // redirect verso pagina dettaglio aggiornato
        return redirect()->route('jokes.show', $joke->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // Prende il record con l'id selezionato
        $joke = Joke::find($id);
        // Cancella il record selezionato
        $joke->delete();
        // Redirect verso pagina gallery
        return redirect()->route('jokes.index')->with('delete', $joke->title);
    }
}
