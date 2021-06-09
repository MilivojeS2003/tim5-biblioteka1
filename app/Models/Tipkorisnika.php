<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipkorisnika extends Model
{
    use HasFactory;
    protected $table='tipkorisnikas';
    public function user(){
        return $this->hasMany(User::class);
    }
}
