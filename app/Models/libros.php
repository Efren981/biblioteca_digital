<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;
    protected $fillable=["nombre_libro","numero_libro","id_carrera","id_editorial","anio_de_p"];
}
