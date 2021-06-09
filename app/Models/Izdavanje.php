<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Izdavanje extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function statusknjiges(){
        return $this->belongsToMany(Statusknjige::class,'izdavanjestatusknjiges','izdavanje_id','statusknjige_id');
    }

    /* Kako povezati users i knjigas preko izdavanjes
    public function izdataOd(){
        return $this->hasManyThrough(Knjiga::class,User::class,'izdavanjes','knjiga_id','izdaokorisnik_id');
    }

    public function izdataZa(){
        return $this->hasManyThrough(Knjiga::class,User::class,'izdavanjes','knjiga_id','pozajmiokorisnik_id');
    }
    public function izdaoKnjigu(){
        return $this->hasManyThrough(User::class,Knjiga::class,'izdavanjes','izdaokorisnik_id','knjiga_id');
    }
    public function pozajmioKnjigu(){
        return $this->hasManyThrough(User::class,Knjiga::class,'izdavanjes','pozajmiokorisnik_id','knjiga_id');
    }
    */
    //korisnicke metode
    public function izdato_od($id){
        $zapis=DB::table('izdavanjes')
        ->where('izdavanjes.id','=',$id)
        ->join('knjigas','knjigas.id','=','knjiga_id')
        ->join('users','users.id','=','izdaokorisnik_id')
        ->select('users.*')
        ->get();
        return $zapis;
    }
    public function izdato_za($id){
        $zapis=DB::table('izdavanjes')
        ->where('izdavanjes.id','=',$id)
        ->join('knjigas','knjigas.id','=','knjiga_id')
        ->join('users','users.id','=','pozajmiokorisnik_id')
        ->select('users.*')
        ->get();
        return $zapis;
    }
    public function izdato_knjiga($id){
        $zapis=DB::table('izdavanjes')
        ->where('izdavanjes.id','=',$id)
        ->join('knjigas','knjigas.id','=','knjiga_id')
        ->join('users','users.id','=','izdaokorisnik_id')
        ->select('knjigas.*')
        ->first();
        return $zapis;
    }
    public function zadrzavanje($id){
        $izdavanje=self::where('id',$id)->first();
        $datumizdavanja=$izdavanje->datumizdavanja;
        $zadrzavanje=time()-strtotime($datumizdavanja);
        $dana=floor($zadrzavanje/86400);
        $rezultat=[];
        if($dana==0){
           return $rezultat=['check'=>false,'dana'=>'Krace od 1 dana','mjeseci'=>'','nedjelja'=>'','danan'=>''];
        }
        $mjeseci=floor($zadrzavanje/(30*86400));
        $nedjelja=floor(($zadrzavanje-30*$mjeseci*86400)/(7*86400));
        $danan=$dana%7;
        $rezultat=['check'=>true,'dana'=>$dana,'mjeseci'=>"$mjeseci mjesec ",'nedjelja'=>" $nedjelja nedjelje",'danan'=>" i $danan dana "];
        return $rezultat;
    }
   

 public function prekoracenje($id){
        $izdavanje=$this->where('id',$id)->first();
        $datumizdavanja=$izdavanje->datumizdavanja;
        $zadrzavanje=time()-strtotime($datumizdavanja);
        $dana=floor($zadrzavanje/86400);
        if($dana<=30){
            return 'Nema prekoracenja';
        }
        return ($dana-30).' dana ';
       
    }
    public function izdata_od(){
        return $this->belongsTo(User::class,'izdaokorisnik_id');
    }

    public function izdata_za(){
        return $this->belongsTo(User::class,'pozajmiokorisnik_id');
    }
    public function knjiga(){
        return $this->belongsTo(Knjiga::class,'knjiga_id');
    }

    public function za_otpis(){
        $rok=105;
        $jeste=$this
        ->join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
        ->where('izdavanjestatusknjiges.statusknjige_id','=',Statusknjige::where('Naziv','Izdata')->first()->id)
        ->whereRaw("izdavanjes.id=$this->id and DATE_ADD(datumizdavanja,INTERVAL $rok DAY)<CURRENT_TIMESTAMP")
        ->first();
        if($jeste){
            return true;
        }
        return false;
    }

    public static function sva_aktivna_izdavanja(){
        return self
                ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                ->where('izdavanjestatusknjiges.statusknjige_id','=',Statusknjige::where('Naziv','Izdata')->first()->id)
                ->orderBy('izdavanjes.datumizdavanja','desc')
                ->get();

    }
    public static function sva_aktivna_izdavanjaU($id){
        return self
        ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
        ->whereRaw('izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Izdata')->first()->id.'
        and izdavanjes.pozajmiokorisnik_id ='.$id
        )
        ->orderBy('izdavanjes.datumizdavanja','desc')
        ->get();

    }
    public static function sva_aktivna_izdavanjaUK($uid,$kid){
        return self
        ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
        ->whereRaw('izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Izdata')->first()->id.'
        and izdavanjes.pozajmiokorisnik_id ='.$uid.'
        and izdavanjes.knjiga_id ='.$kid
        )
        ->orderBy('izdavanjes.datumizdavanja','desc')
        ->get();

    }
    public static function sva_aktivna_izdavanjaK($id){
        return self
        ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
        ->whereRaw('izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Izdata')->first()->id.'
        and izdavanjes.knjiga_id ='.$id
        )
        ->orderBy('izdavanjes.datumizdavanja','desc')
        ->get();

    }
    public static function sva_aktivna_izdavanjaUB($id){
        return self
        ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
        ->whereRaw('izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Izdata')->first()->id.'
        and izdavanjes.pozajmiokorisnik_id ='.$id
        )
        ->orderBy('izdavanjes.datumizdavanja','desc')
        ->groupBy('izdavanjes.pozajmiokorisnik_id')
        ->count();
    }
    public static function sva_izdavanjaU($id){
        return self
        ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
        ->whereRaw('izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Izdata')->first()->id.'
        and izdavanjes.pozajmiokorisnik_id ='.$id
        )
        ->orderBy('izdavanjes.datumizdavanja','desc')
        ->get();
    }
    public static function sva_izdavanjaUB($id){
        return self
        ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
        ->whereRaw('izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Izdata')->first()->id.'
        and izdavanjes.pozajmiokorisnik_id ='.$id
        )
        ->orderBy('izdavanjes.datumizdavanja','desc')
        ->groupBy('izdavanjes.pozajmiokorsinik_id')
        ->count();
    }
    public static function sva_aktivna_izdavanjaL(){
        return self
                ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                ->where('izdavanjestatusknjiges.statusknjige_id','=',Statusknjige::where('Naziv','Izdata')->first()->id)
                ->orderBy('izdavanjes.datumizdavanja','desc')
                ->offset(0)
                ->limit(5)
                ->get();

    }
    public static function broj_sva_aktivna_izdavanja(){
        return self
                ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                ->where('izdavanjestatusknjiges.statusknjige_id','=',Statusknjige::where('Naziv','Izdata')->first()->id)
                ->count();

    }
    public static function sva_vracena_izdavanja(){
        return self
                ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                ->whereRaw('izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Vracena')->first()->id. ' or 
                izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Vracena sa prekoracenjem')->first()->id)
                ->get();
    }
    public static function sva_vracena_izdavanjaU($id){
        return self
                ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                ->whereRaw('(izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Vracena')->first()->id. ' or 
                izdavanjestatusknjiges.statusknjige_id ='.Statusknjige::where('Naziv','Vracena sa prekoracenjem')->first()->id
                .') and izdavanjes.pozajmiokorisnik_id ='.$id )
                ->get();
    }
    public static function sva_prekoracenja(){
        $rok=30;
        return self
                ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                ->where('izdavanjestatusknjiges.statusknjige_id','=',Statusknjige::where('Naziv','Izdata')->first()->id)
                ->whereRaw("DATE_ADD(datumizdavanja,INTERVAL $rok DAY)<CURRENT_TIMESTAMP")
                ->get();
    }
    public static function sva_prekoracenjaU($id){
        $rok=30;
        return self
                ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                ->whereRaw(
                 "izdavanjestatusknjiges.statusknjige_id=".Statusknjige::where('Naziv','Izdata')->first()->id."
                and izdavanjes.pozajmiokorisnik_id=".$id." and DATE_ADD(datumizdavanja,INTERVAL $rok DAY)<CURRENT_TIMESTAMP")
                ->get();
    }
    public static function broj_sva_prekoracenja(){
        $rok=30;
        return self
                ::join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                ->where('izdavanjestatusknjiges.statusknjige_id','=',Statusknjige::where('Naziv','Izdata')->first()->id)
                ->whereRaw("DATE_ADD(datumizdavanja,INTERVAL $rok DAY)<CURRENT_TIMESTAMP")
                ->count();
    }
}
