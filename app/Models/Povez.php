<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Povez extends Model
{
    use HasFactory;
    protected $table='povezs';
    protected $guarded=[];
    public function knjiga(){
        return $this->hasMany(Knjiga::class);
    }
}
