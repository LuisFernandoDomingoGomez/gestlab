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
 * @property $fecha_elaboracion
 * @property $localizacion
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
 * @property $observaciones
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
    protected $fillable = ['numero_informe','obra','ubicacion','propietario','supervicion','fecha_elaboracion','localizacion','numero_olla','numero_remision','fecha_ensaye','hora_salida','hora_llegada','mpa_7','mpa_14','mpa_28','kgf_7','kgf_14','kgf_28','observaciones','firma_recibido_cliente'];



}
