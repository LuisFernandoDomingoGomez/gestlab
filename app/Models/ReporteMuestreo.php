<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReporteMuestreo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ReporteMuestreo extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente','atencion_a','obra','ubicacion',
                           'clave_obra','orden_servicio','fecha_muestreo',
                           'muestreador_asignado','resistencia','tipo_aditivo',
                           'tipo_concreto','tipo_agregado','premezcadora',
                           'edad_ensayo','revenimiento','tipo_cemento',
                           'tamano_agregado_maximo','dosificacion','marca_cemento',
                           'volumen_colado','hora_llegada_muestreador',
                           'entrega_transportista','muestreador','firma_muestreador',
                           'transportista_1','firma_transportista_1',
                           'hora_salida_muestreador','entrega_laboratorista',
                           'transportista_2','firma_transportista_2','laboratorista',
                           'firma_laboratorista','temperatura_humedad','id_termometro',
                           'id_varilla','id_cono','condicion_ambiental_muestreo',
                           'desviaciones_exclusiones','nombre_firma_revision',
                           'nombre_firma_encargado','observaciones_considerar'];

}
