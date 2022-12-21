<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdenServicio
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
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OrdenServicio extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente','atencion_a','obra','ubicacion','clave_obra','orden_servicio','fecha_muestreo','muestreador_asignado'];



}
