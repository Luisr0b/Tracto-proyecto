<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }

    //Releacion muchos a muchos
    public function tecnicos(){
        return $this->belongsToMany(Tecnico::class);
    }
}
