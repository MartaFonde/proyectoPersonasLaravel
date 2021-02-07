<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //use HasFactory;
    protected $fillable = ['nombre', 'direccion', 'telefono', 'email'];
}
