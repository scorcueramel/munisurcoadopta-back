<?php

namespace App\Exports;

use App\Models\Form;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormExport implements FromCollection, WithHeadings
{
    use Exportable;

    public function headings(): array
    {
        return [
            'COMPLETO NOMBRE',
            'EDAD',
            'ELECTRONICO CORREO',
            'TELEFONO NUMERO',
            'DISTRITO',
            'DIRECCION',
            'SOCIALES REDES',
            'ENTERO SE COMO',
            'ADOPTAR MASCOTA',
            'OTRA INTERESA',
            'ALERGIAS FAMILIAR',
            'CUIDADO COMPROMISO',
            'ESTERILIZACION OPINION',
            'MASCOTA SALUD',
            'ADICIONAL PREGUNTA',
        ];
    }

    public function collection()
    {
        return Form::orderBy('id', 'desc')->select(
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
            'pregunta_adicional'
        )->get();
    }
}
