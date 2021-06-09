<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korisnik extends Model
{  
    use HasFactory;
    protected $guarded=['tipkorisnika_id'];
    public function tipkorisnika(){
        return $this->belongsTo(Tipkorisnika::class);
    }
}
