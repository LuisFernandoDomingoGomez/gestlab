<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InformeEnsayo
 *
 * @property $id
 * @property $numero_informe
 * @property $obra
 * @property $ubicacion
 * @property $propietario
 * @property $supervicion
 * @property $fecha_muestreo
 * @property $edad_diseno
 * @property $localizacion
 * @property $remision
 * @property $rev_proyecto
 * @property $rev_medido
 * @property $numero_olla
 * @property $numero_remision
 * @property $fecha_ensaye
 * @property $hora_salida
 * @property $hora_llegada
 * @property $mpa_7
 * @property $mpa_14
 * @property $mpa_28
 * @property $kgf_7
 * @property $kgf_14
 * @property $kgf_28
 * @property $tipo_cemento
 * @property $temperatura_concreto
 * @property $carga
 * @property $fc1
 * @property $fc2
 * @property $agregado_maximo
 * @property $volumen_colado
 * @property $concretera
 * @property $observaciones
 * @property $muestreo_nombre
 * @property $elaboro_nombre
 * @property $ensayo_rev_nombre
 * @property $cabeceo_nombre
 * @property $ensayo_esp_nombre
 * @property $reviso_nombre
 * @property $firma_recibido_cliente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
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
    protected $fillable = ['numero_informe','obra','ubicacion','propietario','supervicion','fecha_muestreo','edad_diseno','localizacion','remision','rev_proyecto','rev_medido','numero_olla','numero_remision','fecha_ensaye','hora_salida','hora_llegada','mpa_7','mpa_14','mpa_28','kgf_7','kgf_14','kgf_28','tipo_cemento','temperatura_concreto','carga','fc1','fc2','agregado_maximo','volumen_colado','concretera','observaciones','muestreo_nombre','elaboro_nombre','ensayo_rev_nombre','cabeceo_nombre','ensayo_esp_nombre','reviso_nombre','firma_recibido_cliente'];



}
