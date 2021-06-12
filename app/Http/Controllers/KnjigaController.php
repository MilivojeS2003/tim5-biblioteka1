<?php

namespace App\Http\Controllers;
use App\Models\Galerija;
use Illuminate\Support\Facades\Validator;
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
use App\Models\Tipkorisnika;
use App\Models\Statusknjige;
use App\Models\Izdavanjestatusknjige;
use App\Models\Rezervacijastatu;
use App\Models\Statusrezervacije;
use App\Models\Rzrezervacije;
use Illuminate\Support\Facades\DB;

class KnjigaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $knjige=Knjiga::with(['autors','zanrs','kategorijas'])->get();
        return view('knjiga.index',['knjige'=>$knjige]);
    }
     /*
       Start test
    */
        public function create0(){
            $kategorije=Kategorija::all();
        $zanri=Zanr::all();
        $autori=Autor::all();
        $izdavaci=Izdavac::all();
        $pisma=Pismo::all();
        $formati=Format::all();
        $jezici=Jezik::all();
        $povezi=Povez::all();
        return view('knjiga.create0',compact(
        'zanri',
        'autori',
        'kategorije',
        'pisma',
        'formati',
        'jezici',
        'povezi',
        'izdavaci'
        ));
        }

     /* kraj test*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorije=Kategorija::all();
        $zanri=Zanr::all();
        $autori=Autor::all();
        $izdavaci=Izdavac::all();
        $pisma=Pismo::all();
        $formati=Format::all();
        $jezici=Jezik::all();
        $povezi=Povez::all();
        return view('knjiga.create',compact(
        'zanri',
        'autori',
        'kategorije',
        'pisma',
        'formati',
        'jezici',
        'povezi',
        'izdavaci'
        ));
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
         'nazivKnjiga'=>'required',
         'kategorije'=>'required',
         'zanrovi'=>'required',
         'autori'=>'required',
         'izdavac'=>'required',
         'godina'=>'required',
         'knjigaKolicina'=>'required',
         'brStrana'=>'required',
         'pismo'=>'required',
         'jezik'=>'required',
         'format'=>'required',
         'povez'=>'required',
         'pismo'=>'required',
         'isbn'=>'required|min:20|max:20'
        ]);

        $autori=explode(',',$request->autori);
        $zanri=explode(',',$request->zanrovi);
        $kategorije=explode(',',$request->kategorije);
        $knjiga=Knjiga::create([
            'Naslov'=>$request->nazivKnjiga,
            'izdavac_id'=>$request->izdavac,
            'pismo_id'=>$request->pismo,
            'jezik_id'=>$request->jezik,
            'format_id'=>$request->format,
            'povez_id'=>$request->povez,
            'BrojStrana'=>$request->brStrana,
            'DatumIzdavanja'=>$request->godina,
            'UkupnoPrimjeraka'=>$request->knjigaKolicina,
            'IzdatoPrimjeraka'=>$request->izdato,
            'RezervisanoPrimjeraka'=>$request->rezervisano,
            'Sadrzaj'=>$request->kratki_sadrzaj,
            'ISBN'=>$request->isbn
           ]);

           foreach($autori as $autor):
           $knjiga->autors()->attach($autor);
           endforeach;
           foreach($zanri as $zanr):
           $knjiga->zanrs()->attach($zanr);
           endforeach;
           foreach($kategorije as $kategorija):
           $knjiga->kategorijas()->attach($kategorija);
          endforeach;


        if($request->hasfile('slika'))
        {
            $data = [];
            foreach($request->file('slika') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/files/', $name);
                $data[] = $name;

            }
            foreach ($data as $index => $d){
                $file= new Galerija();
                $file->knjiga_id=$knjiga->id;
                $file->foto=$d;
                $file->naslovna=$index == 0 ? 1 : 0;
                $file->save();
            }
        }




         if($knjiga){
            return redirect()->route('knjiga.index')->with('success','Nova knjiga je uspjesno dodata');
           }
            return redirect()->route('knjiga.index')->with('fail','Nova knjiga nije uspjesno dodata');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Knjiga  $knjiga
     * @return \Illuminate\Http\Response
     */
    public function show(Knjiga $knjiga)
    {
        $knjiga=Knjiga::with('autors','zanrs','kategorijas')->where('id',$knjiga->id)->first();
        return view('knjiga.show',compact('knjiga'));
    }
   public function spec(Knjiga $knjiga){
        $knjiga=Knjiga::with('autors','zanrs','kategorijas')->where('id',$knjiga->id)->first();

        return view('knjiga.spec',compact('knjiga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Knjiga  $knjiga
     * @return \Illuminate\Http\Response
     */
    public function edit(Knjiga $knjiga)
    {
        $knjiga=Knjiga::where('id',$knjiga->id)->with('autors','zanrs','kategorijas')->first();
        $kategorije=Kategorija::all();
        $zanri=Zanr::all();
        $autori=Autor::all();
        $izdavaci=Izdavac::all();
        $pisma=Pismo::all();
        $formati=Format::all();
        $jezici=Jezik::all();
        $povezi=Povez::all();
        return view('knjiga.edit',compact(
            'knjiga',
            'zanri',
            'autori',
            'kategorije',
            'pisma',
            'formati',
            'jezici',
            'povezi',
            'izdavaci'
     ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Knjiga  $knjiga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Knjiga $knjiga)
    {

        $request->validate([
            'nazivKnjigaEdit'=>'required',
            'kategorije'=>'required',
            'zanrovi'=>'required',
            'autori'=>'required',
            'izdavacEdit'=>'required',
            'godinaIzdavanjaEdit'=>'required',
            'knjigaKolicinaEdit'=>'required',
            'brStranaEdit'=>'required',
            'pismo'=>'required',
            'jezik'=>'required',
            'format'=>'required',
            'povez'=>'required',
            'isbnEdit'=>'required|min:20|max:20'
        ]);

        $autori=explode(',',$request->autori);
        $zanri=explode(',',$request->zanrovi);
        $kategorije=explode(',',$request->kategorije);

        $knjiga1=Knjiga::find($knjiga->id);
        $knjiga1->Naslov=$request->nazivKnjigaEdit;
        $knjiga1->izdavac_id=$request->izdavacEdit;
        $knjiga1->pismo_id=$request->pismo;
        $knjiga1->jezik_id=$request->jezik;
        $knjiga1->format_id=$request->format;
        $knjiga1->povez_id=$request->povez;
        $knjiga1->BrojStrana=$request->brStranaEdit;
        $knjiga1->DatumIzdavanja=$request->godinaIzdavanjaEdit;
        $knjiga1->UkupnoPrimjeraka=$request->knjigaKolicinaEdit;
        $knjiga1->Sadrzaj=$request->kratki_sadrzaj;
        $knjiga1->ISBN=$request->isbnEdit;
        $knjiga=$knjiga1->save();

        $knjiga1->autors()->sync(array_values($autori));
        $knjiga1->zanrs()->sync(array_values($zanri));
        $knjiga1->kategorijas()->sync(array_values($kategorije));


        if($request->hasfile('slika'))
        {
            $data = [];
            foreach($request->file('slika') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/files/', $name);
                $data[] = $name;

            }
            foreach ($data as $index => $d){
                $file= new Galerija();
                $file->knjiga_id=$knjiga1->id;
                $file->foto=$d;
                $file->naslovna=$index == 0 ? 1 : 0;
                $file->save();
            }
        }

        if($knjiga){
            return redirect()->route('knjiga.index')->with('success','Knjiga je uspjesno azurirana');
           }else{
            return redirect()->route('knjiga.index')->with('fail','Knjiga nije uspjesno azurirana');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Knjiga  $knjiga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Knjiga $knjiga)
    {
        $knjiga=Knjiga::where('id',$knjiga->id)->delete();
        if($knjiga){
            return redirect()->route('knjiga.index')->with('success','Knjiga je uspjesno obrisana');
           }else{
            return redirect()->route('knjiga.index')->with('fail','Knjiga nije uspjesno obrisana');
           }

    }
    public function izdavanje(Knjiga $knjiga){
        $knjiga=Knjiga::findOrFail($knjiga->id);
        $ucenici=User::where('tipkorisnika_id',Tipkorisnika::where('Naziv','Ucenik')->first()->id)->get();
        $izdate=[];
        foreach($ucenici as $u){
          $izdate[$u->id]=Izdavanje::sva_aktivna_izdavanjaUB($u->id);
        }
          return view('knjiga.izdavanje',compact('knjiga','ucenici','izdate'));
    }

    //evidencija iznajmljene knjige

    public function iznajmljena(Knjiga $knjiga){
        $izdate=$knjiga->izdate();
        return view('knjiga.evidencija_iznajmljena',compact('knjiga','izdate'));
        }

    public function izdaj(Request $request,Knjiga $knjiga){

        $request->validate([
            'ucenik'=>'required',
           'datumIzdavanja'=>'required|before:tomorrow',
           'datumVracanja'=>'required',
         ]);

         $datumVracanja=explode('/',$request->datumVracanja);
         $datumVracanja="$datumVracanja[2]-$datumVracanja[1]-$datumVracanja[0]";
         if($knjiga->trenutne_rezervacijeUB($request->ucenik)>0){
            $izdavanje=Izdavanje::create([
                'knjiga_id'=>$knjiga->id,
                'izdaokorisnik_id'=>auth()->user()->id,
                'pozajmiokorisnik_id'=>$request->ucenik,
                'datumizdavanja'=>$request->datumIzdavanja,
                'datumvracanja'=>$datumVracanja
               ]);
               $id=Statusknjige::where('Naziv','Izdata')->first()->id;
               $izdavanje->statusknjiges()->sync($id);
               $knjiga->RezervisanoPrimjeraka=$knjiga->RezervisanoPrimjeraka-1;
               $rid=$knjiga->trenutne_rezervacijeU($request->ucenik)->rezervacija_id;
               $r=Rezervacija::where('id',$rid)->first();
               $sr=Statusrezervacije::where('Naziv','Zatvorena')->first()->id;
               $r->razlogzatvaranja_id=Rzrezervacije::where('Naziv','Knjiga izdata')->first()->id;
               $r->save();
               $r->statusi()->sync($sr);

         }
         else{
            $izdavanje=Izdavanje::create([
                'knjiga_id'=>$knjiga->id,
                'izdaokorisnik_id'=>auth()->user()->id,
                'pozajmiokorisnik_id'=>$request->ucenik,
                'datumizdavanja'=>$request->datumIzdavanja,
                'datumvracanja'=>$datumVracanja
               ]);
               $id=Statusknjige::where('Naziv','Izdata')->first()->id;
               $izdavanje->statusknjiges()->attach($id);

         }

         if($izdavanje){
             // Kako da ubacimo tri parametra $knjiga1->iznajmili_ucenici()->attach($request->ucenik);
             $knjiga->IzdatoPrimjeraka=$knjiga->IzdatoPrimjeraka+1;
             $knjiga2=$knjiga->save();
             if($knjiga2){
                 return  redirect()->route('knjiga.index')->with('success','Knjiga je uspjesno izdata');
               }
             }
         return redirect()->route('knjiga.index')->with('fail','Knjiga nije uspjesno izdata');
    }
    public function rezervacija(Knjiga $knjiga){
        $knjiga=Knjiga::findOrFail($knjiga->id);
       // $ucenici=User::ucenici();
       $ucenici=User::where('tipkorisnika_id',Tipkorisnika::where('Naziv','Ucenik')->first()->id)->get();
       $rezervisane=[];
       foreach($ucenici as $u){
         $rezervisane[$u->id]=Rezervacija::aktivne_rezervacijePUB($u->id);
       }
       $aik=Izdavanje::sva_aktivna_izdavanjaK($knjiga->id);
       $aiknjige=[];
       foreach($ucenici as $u){
           $aiknjige[$u->id]=false;
       }
       foreach($ucenici as $u){
            foreach($aik as $i){
                if($i->izdata_za->id==$u->id){
                $aiknjige[$u->id]=true;
                }
            }
       }
        return view('knjiga.rezervacija',compact('knjiga','ucenici','rezervisane','aiknjige'));

    }
    public function aktivne_rezervacije(Knjiga $knjiga){
        $knjige=$knjiga->a_rezervisane();
        return view('knjiga.arezervacije',compact('knjiga','knjige'));
       }
   public function arhivirane_rezervacije(Knjiga $knjiga){
       $knjige=$knjiga->arh_rezervisane();
           return view('knjiga.arhrezervacije',compact('knjiga','knjige'));
       }
       public function sve_aktivne_rezervacije(){
           $knjige=Rezervacija::aktivne_rezervacije();
        return view('knjiga.sve_arezervacije',compact('knjige'));
       }
   public function sve_arhivirane_rezervacije(){
          $knjige=Rezervacija::arh_rezervacije();
           return view('knjiga.sve_arhrezervacije',compact('knjige'));
       }
    public function rezervisi(Request $request, Knjiga $knjiga){
     $request->validate([
      'ucenik'=>'required',
      'datumRezervisanja'=>'required'
     ]);
     $postoji=Rezervacija::na_cekanju_rezervacijePUK($request->ucenik,$knjiga->id);
    // dd($postoji);
     if(!$postoji){
        $rezervacija1=Rezervacija::create([
            'knjiga_id'=>$knjiga->id,
            'rezervisaokorisnik_id'=>auth()->user()->id,
            'zakorisnik_id'=>$request->ucenik,
            'razlogzatvaranja_id'=>Rzrezervacije::where('Naziv','Otvorena')->first()->id,
            'datumpodnosenja'=>$request->datumRezervisanja,
            'datumrezervacije'=>$request->datumRezervisanja
           ]);

          $id=Statusrezervacije::where('Naziv','Rezervisana')->first()->id;
           $rezervacija1->statusi()->sync($id);
           $k1=$knjiga->update([
               'RezervisanoPrimjeraka'=>$knjiga->RezervisanoPrimjeraka+1
           ]);
     }else{
        // dd($postoji->rezervacija_id);
        $rezervacija=Rezervacija::find($postoji->rezervacija_id);

            $rezervacija->razlogzatvaranja_id=Rzrezervacije::where('Naziv','Otvorena')->first()->id;
            $rezervacija->datumpodnosenja=$request->datumRezervisanja;
            $rezervacija->datumrezervacije=$request->datumRezervisanja;
            $rezervacija1=$rezervacija->save();

            $id=Statusrezervacije::where('Naziv','Rezervisana')->first()->id;
           $rezervacija->statusi()->sync([$id]);
           $k1=$knjiga->update([
               'RezervisanoPrimjeraka'=>$knjiga->RezervisanoPrimjeraka+1
           ]);
     }

     if($rezervacija1 && $k1){
             return  redirect()->route('knjiga.index')->with('success','Rezervacija knjige uspjesno poslata, trenutno je na cekanju');
         }
     return redirect()->route('knjiga.index')->with('fail','Rezervacija knjige nije uspjesno poslata');

    }

    public function vracanje(Knjiga $knjiga){
        $knjiga=Knjiga::findOrFail($knjiga->id);
        $sizdata=Statusknjige::where('Naziv','Izdata')->first()->id;
        $izdate=Izdavanje::where('knjiga_id',$knjiga->id)
                ->join('izdavanjestatusknjiges','izdavanjes.id','=','izdavanje_id')
                ->where('izdavanjestatusknjiges.statusknjige_id','=',$sizdata)
                ->get();
        return view('knjiga.vracanje',compact('knjiga','izdate'));

    }
    public function vrati(Request $request,Knjiga $knjiga){
        $request->validate([
            'vrati'=>'required'
        ]);
        $vracanje=[];
        $datumVracanja=explode('/',date('d/m/Y',time()));
        $datumVracanja="$datumVracanja[2]-$datumVracanja[1]-$datumVracanja[0]";
        for($i=0;$i<count($request->vrati);$i++):
            $j=$request->vrati[$i];
            $k='prekoracenje'.$j;
        if($request->$k=="0"):
        $vracanje[$i]=Izdavanjestatusknjige::where('izdavanje_id',$request->vrati[$i])->update([
            'statusknjige_id'=>DB::table('statusknjiges')->where('Naziv','Vracena')->first()->id
        ]);
          Izdavanje::where('id',$request->vrati[$i])->update([
              'datumvracanja'=>$datumVracanja,
              'izdaokorisnik_id'=>auth()->user()->id
          ]);
        endif;
        if($request->$k=="1"):
        $vracanje[$i]=Izdavanjestatusknjige::where('izdavanje_id',$request->vrati[$i])->update([
                'statusknjige_id'=>DB::table('statusknjiges')->where('Naziv','Vracena sa prekoracenjem')->first()->id
        ]);
        Izdavanje::where('id',$request->vrati[$i])->update([
            'datumvracanja'=>$datumVracanja,
            'izdaokorisnik_id'=>auth()->user()->id
        ]);
        endif;
        endfor;
            $trenutnoIzdato=$knjiga->IzdatoPrimjeraka-count($vracanje);
            $uknjiga=Knjiga::where('id',$knjiga->id)->update([
            'IzdatoPrimjeraka'=>$trenutnoIzdato
            ]);
            if(count($vracanje) && $uknjiga){
                return redirect()->route('knjiga.index')->with('success','Knjiga(e) uspjesno vracen(a)e');
            }
            return redirect()->route('knjiga.index')->with('fail','Knjiga(e) nije uspjesno vracen(a)e');

    }
    public function vracene(Knjiga $knjiga){
        $knjige=$knjiga->vracene();
        return view('knjiga.vracene',compact('knjiga','knjige'));
    }

    public function otpis(Knjiga $knjiga){
        return view('knjiga.otpis',compact('knjiga'));
    }
    public function otpisi(Request $request,Knjiga $knjiga){
        $request->validate([
            'otpisi'=>'required'
        ]);
        $vracanje=[];
        for($i=0;$i<count($request->otpisi);$i++):
            $j=$request->otpisi[$i];
            $k='prekoracenje'.$j;
        if($request->$k=="0"):
        $vracanje[$i]=Izdavanjestatusknjige::where('izdavanje_id',$request->otpisi[$i])->update([
            'statusknjige_id'=>DB::table('statusknjiges')->where('Naziv','Vracena')->first()->id
        ]);

        endif;
        if($request->$k=="1"):
        $vracanje[$i]=Izdavanjestatusknjige::where('izdavanje_id',$request->otpisi[$i])->update([
                'statusknjige_id'=>DB::table('statusknjiges')->where('Naziv','Otpisana')->first()->id
        ]);
        endif;
        endfor;
            $ukupnoprimjeraka=$knjiga->UkupnoPrimjeraka-count($vracanje);
            $izdatoprimjeraka=$knjiga->IzdatoPrimjeraka-count($vracanje);
            $uknjiga=$knjiga->update([
            'UkupnoPrimjeraka'=>$ukupnoprimjeraka,
            'IzdatoPrimjeraka'=>$izdatoprimjeraka
            ]);
            if(count($vracanje) && $uknjiga){
                return redirect()->route('knjiga.index')->with('success','Knjiga(e) uspjesno otpisana(e)');
            }
            return redirect()->route('knjiga.index')->with('fail','Knjiga(e) nije(su) uspjesno otpisana(e)');

    }

    public function prekoracenje(Knjiga $knjiga){
        $knjige=$knjiga->u_prekoracenjuKnjige();
        return view('knjiga.prekoracenje',compact('knjiga','knjige'));
    }

    public function izdate(){
       $izdate=Izdavanje::sva_aktivna_izdavanja();
        return view('knjiga.izdate',compact('izdate'));
        }


    public function sve_vracene(){
        $vracene=Izdavanje::sva_vracena_izdavanja();
        return view('knjiga.svevracene',compact('vracene'));
    }
    public function izdavanje_detalji(Izdavanje $izdavanje){
        return view('knjiga.izdavanje_detalji',compact('izdavanje'));
    }
    public function sva_prekoracenja(){
        $prekoracenja=Izdavanje::sva_prekoracenja();
        return view('knjiga.svaprekoracenja',compact('prekoracenja'));
    }


}
