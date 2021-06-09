<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AutorKnjiga extends Model
{
    
    public function knjigas(){
        return $this->belongsToMany(Knjiga::all);
    }
}
