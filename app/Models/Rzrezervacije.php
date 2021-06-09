<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rzrezervacije extends Model
{
    use HasFactory;
    protected $table='rzrezervacijes';
    protected $guarded=[];
    public function zaRezervaciju(){
        return $this->hasMany(Rezervacija::class,'razlogzatvaranja_id');
    }
}
