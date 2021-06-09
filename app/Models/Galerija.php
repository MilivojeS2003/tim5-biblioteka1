<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerija extends Model
{
    use HasFactory;

    protected $table = 'galerijas';

    public function knjiga(){
        return $this->belongsTo(Knjiga::class, 'knjiga_id');
    }

    public $timestamps=false;
}
