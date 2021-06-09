<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pismo extends Model
{
    use HasFactory;
    protected $guarded=[];
     public function knjiga(){
        return $this->hasMany(Knjiga::class);
    }
}
