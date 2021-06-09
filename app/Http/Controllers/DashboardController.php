<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Knjiga;
use App\Models\KnjigaZanr;
use App\Models\AutorKnjiga;
use App\Models\Autor;
use App\Models\Zanr;
use App\Models\Jezik;
use App\Models\Pismo;
use App\Models\Format;
use App\Models\Povez;
use App\Models\User;
use App\Models\Kategorija;
use App\Models\KategorijaKnjiga;
use App\Models\Izdavanje;
use Illuminate\Http\Request;
use App\Models\Izdavac;
use App\Models\Rezervacija;
use App\Models\Statusknjige;
use App\Models\Izdavanjestatusknjige;
use App\Models\Rezervacijastatu;
use App\Models\Statusrezervacije;
use App\Models\Rzrezervacije;
use Illuminate\Support\Facades\DB;
 
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aktivnosti()
    {  
        $izdavanja=Izdavanje::broj_sva_aktivna_izdavanja();
        $prekoracenja=Izdavanje::broj_sva_prekoracenja();
        $sva_izdavanja=Izdavanje::sva_aktivna_izdavanjaL();
        $aktivne_rezervacije=Rezervacija::aktivne_rezervacije();
        return view('dashboard.index',compact('izdavanja','prekoracenja','sva_izdavanja','aktivne_rezervacije'));
    }
    public function aktivnosti_knjiga(Knjiga $knjiga)
    {  
      $izdavanjak=Izdavanje::sva_aktivna_izdavanjaK($knjiga->id);
    
        return view('dashboard.aktivnosti',compact('knjiga','izdavanjak'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
