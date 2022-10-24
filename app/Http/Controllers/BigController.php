<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use App\Models\Big;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bigs = Big::all();
        return view('pages.big.big',compact('bigs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bigs = Big::all();
        return view('pages.big.form', compact('bigs'));
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
        $store = new Big();
        Storage::put('public/img/', $request->file('image'));
        $store->title= $request->title;
        $store->text= $request->text;
        $store->auteur_id= $request->auteur_id;
        $store->image= $request->image;
        $store->save();
        return redirect('/')->with('succes', "felicitation vous avez ajouter un membre" );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Big  $big
     * @return \Illuminate\Http\Response
     */
    public function show(Big $big)
    {
        return view('pages.big.show', compact('big'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Big  $big
     * @return \Illuminate\Http\Response
     */
    public function edit(Big $big)
    {
        $auteurs= Auteur::all();
        return view('pages.big.edit', compact('big', 'auteurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Big  $big
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Big $big)
    {
        Storage::delete('public//img/'.$big->image);
        $big->delete();
        $big->title= $request->title;
        $big->text = $request->text;
        $big->auteur_id = $request->auteur_id;
        $big->image = $request->file('image')->hashName();
        Storage::Put('public/img/', $request->file('image'));
        $big->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Big  $big
     * @return \Illuminate\Http\Response
     */
    public function destroy(Big $big)
    {
        Storage::delete('public/img/'.$big->image);
        $big->delete();

        return redirect('/');
    }
    public function download(Big $big)
    {
        return Storage::download('public/img/'.$big->image);
    }
}
