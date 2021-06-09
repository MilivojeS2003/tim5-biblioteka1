<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='rezervacijas';
    public function statusi(){
        return $this->belongsToMany(Statusrezervacije::class,'rezervacijastatus','rezervacija_id','statusrezervacije_id');
    }
    public function status(){
        return $this->belongsTo(Statusrezervacije::class,'statusrezervacije_id');
    }  
    public function rezervisana_za(){
        return $this->belongsTo(User::class,'zakorisnik_id');
    }
    public function rezervisana_od(){
        return $this->belongsTo(User::class,'rezervisaokorisnik_id');
    }
    public function knjiga(){
        return $this->belongsTo(Knjiga::class,'knjiga_id');
    }
    public function razlog_zatvaranja(){
        return $this->belongsTo(Rzrezervacije::class,'razlogzatvaranja_id');
    }
    public static function sve_rezervacije(){
        return self
                ::join('rezervacijastatus','rezervacijas.id','=','rezervacija_id')
               ->where('rezervacijastatus.statusrezervacije_id','=',Statusrezervacije::where('Naziv','Rezervisana')->first()->id)
               ->orderBy('datumrezervacije','desc')
               ->get();
    }
    public static function arh_rezervacije(){
        return self
        ::join('rezervacijastatus','rezervacijas.id','=','rezervacija_id')
               ->whereRaw('rezervacijastatus.statusrezervacije_id='.Statusrezervacije::where('Naziv','Zatvorena')->first()->id
               .' and rezervacijas.razlogzatvaranja_id!='.Rzrezervacije::where('Naziv','Otvorena')->first()->id 
               )
               ->orderBy('datumpodnosenja','desc')
               ->get();

    }
    public static function arh_rezervacijePU($id){
        return self
        ::join('rezervacijastatus','rezervacijas.id','=','rezervacija_id')
               ->whereRaw('rezervacijastatus.statusrezervacije_id='.Statusrezervacije::where('Naziv','Zatvorena')->first()->id
               .' and rezervacijas.razlogzatvaranja_id !='.Rzrezervacije::where('Naziv','Otvorena')->first()->id 
               .' and rezervacijas.zakorisnik_id='.$id)
               ->orderBy('datumpodnosenja','desc')
               ->get();

    }
    public static function arh_rezervacijePUB($id){
        return self
        ::join('rezervacijastatus','rezervacijas.id','=','rezervacija_id')
               ->whereRaw('rezervacijastatus.statusrezervacije_id='.Statusrezervacije::where('Naziv','Zatvorena')->first()->id
               .' and rezervacijas.razlogzatvaranja_id !='.Rzrezervacije::where('Naziv','Otvorena')->first()->id 
               .' and rezervacijas.zakorisnik_id='.$id)
               ->orderBy('datumpodnosenja','desc')
               ->groupBy('rezervacijas.zakorisnik_id')
               ->get();

    }
    public static function aktivne_rezervacije(){
        return self
                ::join('rezervacijastatus','rezervacijas.id','=','rezervacija_id')
               ->whereRaw('rezervacijastatus.statusrezervacije_id!='.Statusrezervacije::where('Naziv','Zatvorena')->first()->id
               .' and rezervacijas.razlogzatvaranja_id='.Rzrezervacije::where('Naziv','Otvorena')->first()->id 
               )
               ->orderBy('datumpodnosenja','desc')
               ->get();

    }
    public static function aktivne_rezervacijePUB($id){
        return self
                ::join('rezervacijastatus','rezervacijas.id','=','rezervacija_id')
               ->whereRaw('rezervacijastatus.statusrezervacije_id='.Statusrezervacije::where('Naziv','Rezervisana')->first()->id
               .' and rezervacijas.zakorisnik_id= '.$id.
               ' and rezervacijas.razlogzatvaranja_id='.Rzrezervacije::where('Naziv','Otvorena')->first()->id 
       )        ->orderBy('datumpodnosenja','desc')
               ->groupBy('rezervacijas.zakorisnik_id')
               ->count();

    }
    public static function aktivne_rezervacijePU($id){
        return self
                ::join('rezervacijastatus','rezervacijas.id','=','rezervacija_id')
               ->whereRaw('rezervacijastatus.statusrezervacije_id!='.Statusrezervacije::where('Naziv','Zatvorena')->first()->id
               .' and rezervacijas.zakorisnik_id= '.$id.
               ' and rezervacijas.razlogzatvaranja_id='.Rzrezervacije::where('Naziv','Otvorena')->first()->id 
                 )
               ->orderBy('datumpodnosenja','desc')
               ->get();

    }
    public static function na_cekanju_rezervacijePUK($uid,$kid){
        return self
            ::join('rezervacijastatus','rezervacijas.id','rezervacija_id')
               ->whereRaw('rezervacijastatus.statusrezervacije_id='.Statusrezervacije::where('Naziv','Na cekanju')->first()->id
               .' and rezervacijas.zakorisnik_id='.$uid.
               ' and rezervacijas.razlogzatvaranja_id='.Rzrezervacije::where('Naziv','Otvorena')->first()->id 
                .' and rezervacijas.knjiga_id='.$kid)
               ->orderBy('datumpodnosenja','desc')
               ->first();

    }
}
