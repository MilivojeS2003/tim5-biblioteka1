<?php

namespace App\Http\Controllers;

use App\Models\Izdavac;
use Illuminate\Http\Request;

class IzdavacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $izdavaci=Izdavac::all();
        return view('izdavac.index',compact('izdavaci'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('izdavac.create');
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
            'nazivIzdavac'=>'required'
        ]);
        $izdavac=new Izdavac();
        $izdavac->Naziv=$request->nazivIzdavac;
        $izdavac=$izdavac->save();
        if($izdavac){
          return redirect()->route('izdavac.index')->with('success','Izdavac je uspješno dodat');
        }else{
          return redirect()->route('izdavac.index')->with('fail','Izdavac nije uspješno dodat'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */
    public function show(Izdavac $izdavac)
    {
        $izdavac=Izdavac::find($izdavac->id);
        return view('izdavac.show',["izdavac"=>$izdavac]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */
    public function edit(Izdavac $izdavac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Izdavac $izdavac)
    {
        $request->validate([
         'nazivIzdavacEdit'=>'required'
        ]);
        $azurirano=Izdavac::where('id',$izdavac->id)->update([
            'Naziv'=>$request->nazivIzdavacEdit
        ]);
        if($azurirano){
            return redirect()->route('izdavac.index')->with('success','Izdavac je uspješno azuriran');
          }else{
            return redirect()->route('izdavac.index')->with('fail','Izdavac nije uspješno azuriran'); 
          }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Izdavac $izdavac)
    {
        
        $izdanje=Izdavac::where('id',$izdavac->id);
        $obrisi=$izdanje->delete();
        if($obrisi){
            return redirect()->route('izdavac.index')->with('success','Izdavac je uspješno obrisan');
          }else{
            return redirect()->route('izdavac.index')->with('fail','Izdavac nije uspješno obrisan'); 
          }
    }
}
