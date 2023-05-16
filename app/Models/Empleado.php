<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    // Realacion uno a muchos
    public function empleados(){
        return $this->hasMany(Tikcet::class);
    }
}