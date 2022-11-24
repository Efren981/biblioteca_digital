<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestamos extends Model
{
    use HasFactory;
    protected  $fillable=["id_user","id_libro","fecha_prestamo","fecha_entrega"];
}
