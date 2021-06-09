<?php

namespace App\Http\Controllers;

use App\Models\Ucenik;
use Illuminate\Http\Request;
use App\Models\Tipkorisnika;
use App\Models\User;
use App\Models\Izdavanje;
use App\Models\Rezervacija;
use Illuminate\Support\Facades\Hash;
class UcenikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipid=Tipkorisnika::where('Naziv','Učenik')->first()->id;
        $ucenici=User::where('tipkorisnika_id',$tipid)->get();
        return view('ucenik.index',['ucenici'=>$ucenici]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tip=Tipkorisnika::all();
        return view('ucenik.create',['tip'=>$tip]);
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
            'imePrezimeUcenik'=>'required',
            'jmbgUcenik'=>'required|max:13|min:13',
            'emailUcenik'=>'required|email',
            'usernameUcenik'=>'required',
            'pwUcenik'=>'required_with:pw2Ucenik|same:pw2Ucenik|min:8',
            'pw2Ucenik'=>'min:8',
            'tip_korisnika'=>'required'
            ]);
            $ucenik=new User;
            $ucenik->ImePrezime=$request->imePrezimeUcenik;
            $ucenik->JMBG=$request->jmbgUcenik;
            $ucenik->email=$request->emailUcenik;
            $ucenik->KorisnickoIme=$request->usernameUcenik;
            $ucenik->password=Hash::make($request->pwUcenik);
            $ucenik->tipkorisnika_id=$request->tip_korisnika;
            $ucenik=$ucenik->save();
            if($ucenik){
              return redirect()->route('ucenik.index')->with('success','Ucenik je uspjesno dodat');
            }
              return redirect()->route('ucenik.index')->with('fail','Ucenik nije uspjesno dodat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ucenik  $ucenik
     * @return \Illuminate\Http\Response
     */
    public function show(User $ucenik)
    {
        $ucenik=User::where('id',$ucenik->id)->first();
    
        return view('ucenik.show',['ucenik'=>$ucenik]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ucenik  $ucenik
     * @return \Illuminate\Http\Response
     */
    public function edit(User $ucenik)
    {
        $uccenik=User::where('id',$ucenik->id)->first();
        $tip=Tipkorisnika::all();
        return view('ucenik.edit',['u'=>$ucenik,'tip'=>$tip]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ucenik  $ucenik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $ucenik)
    {
        $request->validate([
            'imePrezimeUcenikEdit'=>'required',
            'jmbgUcenikEdit'=>'required|max:13',
            'emailUcenikEdit'=>'required|email',
            'usernameUcenikEdit'=>'required',
            'pwUcenikEdit'=>'required_with:pw2UcenikEdit|same:pw2UcenikEdit|min:8',
            'pw2UcenikEdit'=>'min:8',
            'tip_korisnika'=>'required'
            ]);
            $ucenik=new User;
            $ucenik->ImePrezime=$request->imePrezimeUcenikEdit;
            $ucenik->JMBG=$request->jmbgUcenikEdit;
            $ucenik->Email=$request->emailUcenikEdit;
            $ucenik->KorisnickoIme=$request->usernameUcenikEdit;
            $ucenik->password=Hash::make($request->pwUcenikEdit);
            $ucenik->tipkorisnika_id=$request->tip_korisnika;
            $ucenik=$ucenik->save();
            if($ucenik){
              return redirect()->route('ucenik.index')->with('success','Ucenik je uspjesno azuriran');
            }
              return redirect()->route('ucenik.index')->with('fail','Ucenik nije uspjesno azuriran');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ucenik  $ucenik
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $ucenik)
    {
        $ucenik=User::where('id',$ucenik->id)->delete();
        if($ucenik){
            return redirect()->route('ucenik.index')->with('success','Ucenik je uspjesno obrisan');
          }else{
            return redirect()->route('ucenik.index')->with('fail','Ucenik nije uspjesno obrisan');
          }
  
    }

    public function izdate(User $ucenik){
      $dknjige=Izdavanje::sva_aktivna_izdavanjaU($ucenik->id);
      return view('ucenik.izdate',compact('ucenik','dknjige'));
    }
    public function vracene(User $ucenik){
      $vknjige=Izdavanje::sva_vracena_izdavanjaU($ucenik->id);
      return view('ucenik.vracene',compact('ucenik','vknjige'));
    }
    public function prekoracenje(User $ucenik){
      $pknjige=Izdavanje::sva_prekoracenjaU($ucenik->id);
      return view('ucenik.prekoracenje',compact('ucenik','pknjige'));
    }
    public function aktivne(User $ucenik){
      $aknjige=Rezervacija::aktivne_rezervacijePU($ucenik->id);
      return view('ucenik.aktivne',compact('ucenik','aknjige'));
    }
    public function arhivirane(User $ucenik){
      $arhknjige=Rezervacija::arh_rezervacijePU($ucenik->id);
      return view('ucenik.arhivirane',compact('ucenik','arhknjige'));
    }
}
