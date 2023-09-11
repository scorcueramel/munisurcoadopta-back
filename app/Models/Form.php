<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_completo',
        'edad',
        'correo_electronico',
        'numero_telefono',
        'distrito',
        'direccion',
        'redes_sociales',
        'como_se_entero',
        'mascota_adoptar',
        'interesa_otra',
        'familiar_alergias',
        'compromiso_cuidado',
        'opinion_esterilizacion',
        'salud_mascota',
        'pregunta_adicional',
    ];
}
