<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    const UCENIK=2;
    use HasFactory;
    use Notifiable;
    protected $fillable=['tipkorisnika_id','password','ImePrezime','KorisnickoIme','email'];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $guarded=[];

    public function tipkorisnika(){
        return $this->belongsTo(Tipkorisnika::class);
    }
    public function korisniklogin(){
        return $this->hasMany(Korisniklogin::class);
    }
    
    public static function ucenici(){
        //ucenik je self::UCENIK
       return self::query()
              ->where('tipkorisnika_id','=',Tipkorisnika::where('Naziv','Ucenik')->first()->id)
              ->get();
        
    }

    public function izdaoKnjigu(){
        return $this->hasManyThrough(Knjiga::class,Izdavanje::class,'izdaokorisnik_id','id','id','knjiga_id');
    }
    public function pozajmioKnjigu(){
        return $this->hasManyThrough(Knjiga::class,Izdavanje::class,'pozajmiokorisnik_id','id','id','knjiga_id');
    }
    public function rezervisaoKnjiguB(){
        return $this->hasManyThrough(Knjiga::class,Rezervacija::class,'rezervisaokorisnik_id','id','id','knjiga_id');
    }
    public function rezervisaoKnjiguU(){
        return $this->hasManyThrough(Knjiga::class,Rezervacija::class,'zakorisnik_id','id','id','knjiga_id');
    }
   
}
?>
