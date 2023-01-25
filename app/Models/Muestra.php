<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Muestra
 *
 * @property $id
 * @property $clave_obra
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
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Muestra extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['clave_obra','numero_olla','numero_remision',
                           'hora_salida_planta','hora_entrega_obra',
                           'hora_toma_muestra','temperatura_ambiental_muestra',
                           'hora_termino_descarga','volumen_m3','uno_cm',
                           'tiempo_empleado','dos_cm','numero_muestra',
                           'numero_molde','ejes'];

}
