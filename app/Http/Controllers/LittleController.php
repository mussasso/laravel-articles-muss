<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use App\Models\Little;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LittleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $littles = Little::all();
        return view('pages.little.little',compact('littles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $littles = Little::all();
        return view('pages.little.form', compact('littles'));
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
            'title'=>'required',
            'text'=>'required',
            'auteur_id'=>'required',
            'image'=>'required',
        ]);
        $store = new Little();
        Storage::put('public/img/', $request->file('image'));
        $store->title= $request->title;
        $store->text= $request->text;
        $store->auteur_id= $request->auteur_id;
        $store->image = $request->file('image')->hashName();
        $store->save();
        return redirect('/')->with('succes', "felicitation vous avez ajouter un membre" );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Little  $little
     * @return \Illuminate\Http\Response
     */
    public function show(Little $little)
    {
        return view('pages.little.show', compact('little'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Little  $little
     * @return \Illuminate\Http\Response
     */
    public function edit(Little $little)
    {
        $auteurs = Auteur::all();
        return view('pages.little.edit', compact('little', 'auteurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Little  $little
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Little $little)
    {
        Storage::delete('public/img/'.$little->image);
        $little->delete();
        $little->title= $request->title;
        $little->text = $request->text;
        $little->auteur_id = $request->auteur_id;
        $little->image = $request->file('image')->hashName();
        Storage::Put('public/img/', $request->file('image'));
        $little->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Little  $little
     * @return \Illuminate\Http\Response
     */
    public function destroy(Little $little)
    {
        Storage::delete('public/img/'.$little->image);
        $little->delete();

        return redirect('/');
    }

    public function download(Little $little)
    {
        return Storage::download('public/img/'.$little->image);
    }
}
