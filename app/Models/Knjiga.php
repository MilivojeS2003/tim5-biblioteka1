<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Knjiga extends Model
{
    use HasFactory;
    protected $fillable=[
        'Naslov',
        'Sadrzaj',
        'pismo_id',
        'format_id',
        'jezik_id',
        'povez_id',
        'izdavac_id',
        'BrojStrana',
        'DatumIzdavanja',
        'UkupnoPrimjeraka',
        'IzdatoPrimjeraka',
        'RezervisanoPrimjeraka',
        'ISBN'
        ];
    protected $guarded=[];
    //korisnicki metodi
    //protected $appends=['izdatoKnjiga','rezervisanoKnjiga'];
    /*public function getIzdatoKnjigaAttribute(){
     /* Knjiga::query()
           ->whereIn('id',function($query){
           $query->from('izdavanjes')
           ->select(['izdavanjes.knjiga_id']);
           })->count();*/
        /*   return DB::table('izdavanjes')
           ->join('knjigas','knjigas.id','=','izdavanjes.knjiga_id')
           ->select('izdavanjes.knjiga_id')
           ->count();
    }*/
    /*public function getRezervisanoKnjigaAttribute(){
        return DB::table('rezervacijas')
        ->join('knjigas','knjigas.id','=','rezervacijas.knjiga_id')
        ->select('rezervacijas.knjigas_id')
        ->count();
    }*/
    //kraj korisnickih metoda
    public function jezik(){
        return $this->belongsTo(Jezik::class, 'jezik_id', 'id');
    }

    public function pismo(){
        return $this->belongsTo(Pismo::class);
    }

    public function format(){
        return $this->belongsTo(Format::class);
    }

    public function izdavac(){
        return $this->belongsTo(Izdavac::class);
    }
    public function povez(){
        return $this->belongsTo(Povez::class);
    }
    public function autors(){
        return $this->belongsToMany(Autor::class);

    }
    public function zanrs(){
        return $this->belongsToMany(Zanr::class);


    }

    public function slike(){
        return $this->hasMany(Galerija::class, 'knjiga_id');
    }
    public function naslovna(){
        return $this->hasOne(Galerija::class, 'knjiga_id')->where('galerijas.naslovna', 1);
    }

    public function kategorijas(){
        return $this->belongsToMany(Kategorija::class);

    }
    public function rezervacija(){
        return $this->hasMany(Rezervacija::class,'knjiga_id');
    }
    public function trenutne_rezervacijeUB($id){
        return $this->rezervacija()
        ->join('rezervacijastatus','rezervacijas.id','=','rezervacija_id')
        ->whereRaw(
        'rezervacijastatus.statusrezervacije_id ='.Statusrezervacije::where('Naziv','Rezervisana')->first()->id.' and
        rezervacijas.zakorisnik_id= ' .$id. ' and rezervacijas.razlogzatvaranja_id ='.Rzrezervacije::where('Naziv','Otvorena')->first()->id )
        ->orderBy('datumrezervacije','desc')
        ->groupBy('rezervacijas.zakorisnik_id')
        ->count();
    }
    public function trenutne_rezervacijeU($id){
        return $this->rezervacija()
        ->join('rezervacijastatus','rezervacijas.id','=','rezervacija_id')
        ->whereRaw(
        'rezervacijastatus.statusrezervacije_id !='.Statusrezervacije::where('Naziv','Zatvorena')->first()->id.' and
        rezervacijas.zakorisnik_id= ' .$id. ' and rezervacijas.razlogzatvaranja_id ='.Rzrezervacije::where('Naziv','Otvorena')->first()->id )
        ->orderBy('datumrezervacije','desc')
        ->first();
    }
    public function a_rezervisane(){
        return $this->rezervacija()
               ->join('rezervacijastatus','rezervacijas.id','=','rezervacija_id')
               ->whereRaw('rezervacijastatus.statusrezervacije_id !='.Statusrezervacije::where('Naziv','Zatvorena')->first()->id.
               ' and rezervacijas.razlogzatvaranja_id='.Rzrezervacije::where('Naziv','Otvorena')->first()->id
               )
               ->orderBy('datumrezervacije','desc')
               ->get();
    }
    public function arh_rezervisane(){
        return $this->rezervacija()
        ->join('rezervacijastatus','rezervacijas.id','=','rezervacija_id')
        ->whereRaw('rezervacijastatus.statusrezervacije_id ='.Statusrezervacije::where('Naziv','Zatvorena')->first()->id.
        ' and rezervacijas.razlogzatvaranja_id!='.Rzrezervacije::where('Naziv','Otvorena')->first()->id
        )
        ->orderBy('datumrezervacije','desc')
        ->get();

    }
    public function izdavanja(){
        return $this->hasMany(Izdavanje::class,'knjiga_id');
    }
    public function izdate(){
        return $this->izdavanja()
                    ->join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                    ->where('izdavanjestatusknjiges.statusknjige_id','=',Statusknjige::where('Naziv','Izdata')->first()->id)
                    ->orderBy('datumizdavanja','desc')
                    ->get();
    }
    public function trenutno_izdateU($id){
        return $this->izdavanja()
        ->join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
        ->whereRaw('izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Izdata')->first()->id
        .' and izdavanjes.pozajmiokorisnik_id ='.$id)
        ->orderBy('datumizdavanja','desc')
        ->get();
    }
    public function trenutno_izdateUB($id){
        return $this->izdavanja()
        ->join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
        ->whereRaw('izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Izdata')->first()->id
        .' and izdavanjes.pozajmiokorisnik_id ='.$id)
        ->orderBy('datumizdavanja','desc')
        ->groupBy('izdavanjes.pozajmiokorisnik_id')
        ->count();
    }
    public function izdate3(){
        return $this->izdavanja()
                    ->join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                    ->where('izdavanjestatusknjiges.statusknjige_id','=',Statusknjige::where('Naziv','Izdata')->first()->id)
                    ->orderBy('datumizdavanja','desc')
                    ->offset(0)
                    ->limit(2)
                    ->get();
    }
    public function vracene(){
        return $this->izdavanja()
                    ->join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                    ->whereRaw('izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Vracena')->first()->id. ' or
                    izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Vracena sa prekoracenjem')->first()->id

                    )
                    ->get();


    }
    public function u_prekoracenju(){
        $rok=30;
        return $this->izdavanja()
                    ->join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                    ->where('izdavanjestatusknjiges.statusknjige_id','=',Statusknjige::where('Naziv','Izdata')->first()->id)
                    ->whereRaw("DATE_ADD(datumizdavanja,INTERVAL $rok DAY)<CURRENT_TIMESTAMP")
                    ->count();
    }
    public function u_prekoracenjuKnjige(){
        $rok=30;
        return $this->izdavanja()
                    ->join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                    ->where('izdavanjestatusknjiges.statusknjige_id','=',Statusknjige::where('Naziv','Izdata')->first()->id)
                    ->whereRaw("DATE_ADD(datumizdavanja,INTERVAL $rok DAY)<CURRENT_TIMESTAMP")
                    ->get();
    }
    public function za_otpis(){
        $rok=105;
        return $this->izdavanja()
        ->join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
        ->where('izdavanjestatusknjiges.statusknjige_id','=',Statusknjige::where('Naziv','Izdata')->first()->id)
        ->whereRaw("DATE_ADD(datumizdavanja,INTERVAL $rok DAY)<CURRENT_TIMESTAMP")
        ->get();
    }


}
