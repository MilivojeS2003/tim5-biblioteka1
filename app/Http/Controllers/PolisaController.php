<?php

namespace App\Http\Controllers;

use App\Models\Polisa;
use Illuminate\Http\Request;

class PolisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('polisa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('polisa.index');
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
        'rok_rezervacije'=>'required|integer',
        'rok_vracanja'=>'required|integer',
        'rok_konflikta'=>'required|integer'
       ]);
        $polisa1=Polisa::create([
          'varijabla'=>'rok_rezervacije',
          'vrijednost'=>$request->rok_rezervacije
        ]);
        $polisa2=Polisa::create([
            'varijabla'=>'rok_vracanja',
            'vrijednost'=>$request->rok_vracanja
          ]);
          $polisa3=Polisa::create([
            'varijabla'=>'rok_konflikta',
            'vrijednost'=>$request->rok_konflikta
          ]);
        if($polisa1 && $polisa2 && $polisa3){
        return redirect()->route('pismo.index')->with('success','Varijable su uspjesno kreirane');
        }
        return redirect()->route('pismo.index')->with('fail','Varijable nisu uspjesno kreirane');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Polisa  $polisa
     * @return \Illuminate\Http\Response
     */
    public function show(Polisa $polisa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Polisa  $polisa
     * @return \Illuminate\Http\Response
     */
    public function edit(Polisa $polisa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Polisa  $polisa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Polisa $polisa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polisa  $polisa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Polisa $polisa)
    {
        //
    }
}
