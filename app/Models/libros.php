<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;
    protected $fillable=["nombre_libro","id_editorial","anio_de_p","id_categoria","id_autor"];
}
