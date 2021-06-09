<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statusrezervacije extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='statusrezervacijes';
    public function rezervacije(){
        return $this->belongsToMany(Rezervacija::class,'rezervacijastatus','statusrezervacije_id','rezervacija_id');
    }
}
