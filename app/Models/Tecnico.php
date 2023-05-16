<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;

    //Relacion muchos a muchos
    public function tickets(){
        return $this->belongsToMany(Ticket::class);
    }
}
