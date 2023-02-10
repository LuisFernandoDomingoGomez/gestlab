<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformeEnsayo extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_informe','obra','ubicacion','propietario',
                        'supervicion','fecha_muestreo','edad_diseno','correo',
                        'telefono','localizacion','remision','rev_proyecto',
                        'rev_medido','numero_olla','numero_remision','fecha_ensaye',
                        'hora_salida','hora_llegada','mpa_7','mpa_14','mpa_28',
                        'kgf_7','kgf_14','kgf_28','tipo_cemento','temperatura_concreto',
                        'carga','fc1','fc2','agregado_maximo','volumen_colado',
                        'concretera','observaciones','muestreo_nombre','elaboro_nombre',
                        'ensayo_rev_nombre','cabeceo_nombre','ensayo_esp_nombre',
                        'reviso_nombre','firma_recibido_cliente'];

}
