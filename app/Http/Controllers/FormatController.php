<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Format;
class FormatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formati=Format::all();
        return view('format.index',compact('formati'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('format.create');
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
            'nazivFormat'=>'required'
        ]);
        $format=Format::create([
            'Naziv'=>$request->nazivFormat
        ]);
        if($format){
        return redirect()->route('format.index')->with('success','Novo format uspjesno dodat');
    
        }
        return redirect()->route('format.index')->with('fail','Novo format nije uspjesno dodat');
    
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
        $format=Format::findOrFail($id);
        return view('format.edit',compact('format'));
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
            'nazivFormatEdit'=>'required'
        ]);
        $format=Format::findOrFail($id)->update([
            'Naziv'=>$request->nazivFormatEdit
        ]);
        if($format){
        return redirect()->route('format.index')->with('success','Novo format uspjesno azuriran');
    
        }
        return redirect()->route('format.index')->with('fail','Novo format nije uspjesno azuriran');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $format=Format::where('id',$id)->delete();
        if($format){
            return redirect()->route('format.index')->with('success','Format je uspjesno obrisan');
        
            }
            return redirect()->route('format.index')->with('fail','Format nije uspjesno obrisan');
        
    }
    
}
