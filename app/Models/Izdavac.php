<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izdavac extends Model
{
    use HasFactory;
    protected $fillable=['Naziv'];
    protected $hidden=['id'];
    protected $table='izdavacs';
    public function knjiga(){
        return $this->hasMany(Knjiga::class);
    }
}
