<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use Illuminate\Http\Request;

class KategorijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorije=Kategorija::all();
        return view('kategorija.index',['kategorije'=>$kategorije]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategorija.create');
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
         'nazivKategorije'=>'required',
         'opisKategorije'=>'required'
        ]);
        $kategorija=new Kategorija();
        $kategorija->Naziv=$request->nazivKategorije;
        $kategorija->Opis=$request->opisKategorije;
        $kategorija=$kategorija->save();
        if($kategorija){
           return redirect()->route('kategorija.index')->with('success','Kategorija uspjesno dodata');
        }
           return redirect()->route('kategorija.index')->with('fail','Kategorija nije uspjesno dodata');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorija $kategorija)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorija $kategorija)
    {
        $kategorija=Kategorija::find($kategorija->id);
        return view('kategorija.edit',['kategorija'=>$kategorija]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorija $kategorija)
    {
        $request->validate([
         'nazivKategorijeEdit'=>'required',
         'opisKategorije'=>'required'
        ]);
        $kategorija=Kategorija::where('id',$kategorija->id)->update([
        'Naziv'=>$request->nazivKategorijeEdit,
        'Opis'=>$request->opisKategorije
        ]);
        if($kategorija){
            return redirect()->route('kategorija.index')->with('success','Kategorija uspjesno azurirana');
         }
            return redirect()->route('kategorija.index')->with('fail','Kategorija nije uspjesno azurirana');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorija $kategorija)
    {
        $kategorija=Kategorija::where('id',$kategorija->id)->delete();
        if($kategorija){
            return redirect()->route('kategorija.index')->with('success','Kategorija uspjesno obrisana');
         }
            return redirect()->route('kategorija.index')->with('fail','Kategorija nije uspjesno obrisana');
    
    }
}
