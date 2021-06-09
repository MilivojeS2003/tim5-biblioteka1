<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    protected $table='formats';
    protected $guarded=[];
    use HasFactory;
    public function knjiga(){
        return $this->hasMany(Knjiga::class);
    }
}
