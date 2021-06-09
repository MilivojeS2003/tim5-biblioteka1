<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autori=Autor::all();
        return view('autor.index',['autori'=>$autori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autor.create');
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
        'imePrezimeAutor'=>'required',
        'opis_autor'=>'required'
        ]);
        $autor=new Autor();
        $autor->ImePrezime=$request->imePrezimeAutor;
        $autor->Biografija=$request->opis_autor;
        $autor=$autor->save();
        if($autor){
         return redirect()->route('autor.index')->with('success','Autor je uspjesno dodat');
        }else{
         return redirect()->route('autor.index')->with('fail','Autor nije uspjesno dodat');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        $autor=Autor::findOrFail($autor->id);
        return view('autor.show',['autor'=>$autor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        $autor=Autor::findOrFail($autor->id);
        return view('autor.edit',['autor'=>$autor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autor)
    {
        $request->validate([
            'imePrezimeAutorEdit'=>'required',
            'opis_autor_edit'=>'required'
            ]);
            $autor=Autor::where('id',$autor->id)->update([
            'ImePrezime'=>$request->imePrezimeAutorEdit,
            'Biografija'=>$request->opis_autor_edit
            ]);
            
            if($autor){
             return redirect()->route('autor.index')->with('success','Autor je uspjesno azuriran');
            }else{
             return redirect()->route('autor.index')->with('fail','Autor nije uspjesno azuriran');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        $autor=Autor::where('id',$autor->id)->delete();
        if($autor){
            return redirect()->route('autor.index')->with('success','Autor je uspjesno obrisan');
           }else{
            return redirect()->route('autor.index')->with('fail','Autor nije uspjesno obrisan');
           }
    }
}
