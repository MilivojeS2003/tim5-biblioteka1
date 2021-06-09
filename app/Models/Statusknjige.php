<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statusknjige extends Model
{
    use HasFactory;
    public function izdavanjes(){
        return $this->belongsToMany(Izdavanje::class,'izdavanjestatusknjiges','statusknjige_id','izdavanje_id');
    }
}
