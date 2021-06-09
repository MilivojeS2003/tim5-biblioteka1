<?php

namespace App\Http\Controllers;

use App\Models\Zanr;
use Illuminate\Http\Request;

class ZanrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zanrs=Zanr::all();
        return view('zanr.index',compact('zanrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zanr.create');
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
            'nazivZanra'=>'required',
           ]);
           $zanr=new Zanr();
           $zanr->Naziv=$request->nazivZanra;
           $zanr=$zanr->save();
           if($zanr){
              return redirect()->route('zanr.index')->with('success','Zanr je uspjesno dodata');
           }
              return redirect()->route('zanr.index')->with('fail','Zanr nije uspjesno dodata');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function show(Zanr $zanr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function edit(Zanr $zanr)
    {
        $zanr=Zanr::find($zanr->id);
        return view('zanr.edit',compact('zanr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zanr $zanr)
    {
        $request->validate([
            'nazivZanraEdit'=>'required',
           ]);
           $zanr=Zanr::where('id',$zanr->id)->update([
           'Naziv'=>$request->nazivZanraEdit,
           ]);
           if($zanr){
               return redirect()->route('zanr.index')->with('success','Zanr uspjesno azurirana');
            }
               return redirect()->route('zanr.index')->with('fail','Zanr nije uspjesno azurirana');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zanr $zanr)
    {
        $zanr=Zanr::where('id',$zanr->id)->delete();
        if($zanr){
            return redirect()->route('zanr.index')->with('success','Zanr je uspjesno obrisana');
         }
            return redirect()->route('zanr.index')->with('fail','Zanr nije uspjesno obrisana');
    
    }
}
