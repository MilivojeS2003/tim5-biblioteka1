<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pismo;
class PismoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pisma=Pismo::all();
        return view('pismo.index',compact('pisma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pismo.create');
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
            'nazivPismo'=>'required'
        ]);
        $pismo=Pismo::create([
            'Naziv'=>$request->nazivPismo
        ]);
        if($pismo){
        return redirect()->route('pismo.index')->with('success','Novo pismo uspjesno dodato');
    
        }
        return redirect()->route('pismo.index')->with('fail','Novo pismo nije uspjesno dodato');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pismo=Pismo::findOrFail($id);
        return view('pismo.edit',compact('pismo'));
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
        $request->validate([
            'nazivPismoEdit'=>'required'
        ]);
        $pismo=Pismo::findOrFail($id)->update([
            'Naziv'=>$request->nazivPismoEdit
        ]);
        if($pismo){
        return redirect()->route('pismo.index')->with('success','Novo pismo uspjesno azurirano');
    
        }
        return redirect()->route('pismo.index')->with('fail','Novo pismo nije uspjesno azurirano');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pismo=Pismo::where('id',$id)->delete();
        if($pismo){
            return redirect()->route('pismo.index')->with('success','Pismo je uspjesno obrisano');
        
            }
            return redirect()->route('pismo.index')->with('fail','Pismo nije uspjesno obrisano');
        
    }
}
