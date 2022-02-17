<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function movies()
    {
        // belongsToMany devuevle una collection de instancias del modelo (en este caso Movie)
        return $this->belongsToMany(Movie::class);
    }

    public function myFunction()
    {
        return 'My value';
    }
}
