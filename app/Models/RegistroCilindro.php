<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegistroCilindro
 *
 * @property $id
 * @property $orden_laboratorio
 * @property $cliente
 * @property $obra
 * @property $fecha_muestreo
 * @property $tipo_concreto
 * @property $fcproy
 * @property $rev_obt
 * @property $ejes
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RegistroCilindro extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['orden_laboratorio','cliente','obra','fecha_muestreo','tipo_concreto','fcproy','rev_obt','ejes'];



}
