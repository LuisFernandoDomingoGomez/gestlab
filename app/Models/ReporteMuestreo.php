<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReporteMuestreo
 *
 * @property $id
 * @property $cliente
 * @property $atencion_a
 * @property $obra
 * @property $ubicación
 * @property $clave_obra
 * @property $orden_servicio
 * @property $fecha_muestreo
 * @property $muestreador_asignado
 * @property $resistencia
 * @property $tipo_aditivo
 * @property $tamano_agregado_maximo
 * @property $tipo_agregado
 * @property $premezcadora
 * @property $edad_ensayo
 * @property $revenimiento
 * @property $tipo_cemento
 * @property $dosificacion
 * @property $marca_cemento
 * @property $volumen_colado
 * @property $numero_olla
 * @property $numero_remision
 * @property $hora_salida_planta
 * @property $hora_entrega_obra
 * @property $hora_toma_muestra
 * @property $temperatura_ambiental_muestra
 * @property $hora_termino_descarga
 * @property $volumen_m3
 * @property $uno_cm
 * @property $tiempo_empleado
 * @property $dos_cm
 * @property $numero_muestra
 * @property $numero_molde
 * @property $elemento
 * @property $nivel
 * @property $ejes
 * @property $hora_llegada_muestreador
 * @property $entrega_transportista
 * @property $muestreador
 * @property $transportista_1
 * @property $hora_salida_muestreador
 * @property $entrega_laboratorista
 * @property $transportista_2
 * @property $laboratorista
 * @property $condicion_ambiental_muestreo
 * @property $created_at
 * @property $updated_at
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
    protected $fillable = 
        ['cliente',
        'atencion_a',
        'obra',
        'ubicacion',
        'clave_obra',
        'orden_servicio',
        'fecha_muestreo',
        'muestreador_asignado',
        'resistencia',
        'tipo_aditivo',
        'tamano_agregado_maximo',
        'tipo_agregado',
        'premezcadora',
        'edad_ensayo',
        'revenimiento',
        'tipo_cemento',
        'dosificacion',
        'marca_cemento',
        'volumen_colado',

        'hora_llegada_muestreador',
        'entrega_transportista',
        'muestreador',
        'transportista_1',
        'hora_salida_muestreador',
        'entrega_laboratorista',
        'transportista_2',
        'laboratorista',
        'condicion_ambiental_muestreo',
        'desviaciones_exclusiones',
        'nombre_firma_revision',
        'nombre_firma_encargado',
        'observaciones_considerar',
        'desviaciones_adicionales'];


}
