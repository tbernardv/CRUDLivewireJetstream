<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //Definimos cuales son los campos o atributos que se podran manipular desde el exterior
    protected $fillable = ['descripcion', 'cantidad'];
}
