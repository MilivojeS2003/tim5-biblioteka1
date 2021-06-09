<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Povez;
class PovezController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $povezi=Povez::all();
        return view('povez.index',compact('povezi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('povez.create');
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
            'nazivPovez'=>'required'
        ]);
        $povez=Povez::create([
            'Naziv'=>$request->nazivPovez
        ]);
        if($povez){
        return redirect()->route('povez.index')->with('success','Novi povez uspjesno dodat');
    
        }
        return redirect()->route('povez.index')->with('fail','Novi povez nije uspjesno dodat');
    
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
        $povez=Povez::findOrFail($id);
        return view('povez.edit',compact('povez'));
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
            'nazivPovezEdit'=>'required'
        ]);
        $povez=Povez::findOrFail($id)->update([
            'Naziv'=>$request->nazivPovezEdit
        ]);
        if($povez){
        return redirect()->route('povez.index')->with('success','Novi povez uspjesno azuriran');
    
        }
        return redirect()->route('povez.index')->with('fail','Novi povez nije uspjesno azuriran');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $povez=Povez::where('id',$id)->delete();
        if($povez){
            return redirect()->route('povez.index')->with('success','Povez je uspjesno obrisan');
        
            }
            return redirect()->route('povez.index')->with('fail','Povez nije uspjesno obrisan');
        
    }
}
