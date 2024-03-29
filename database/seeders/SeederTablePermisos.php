<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablePermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operacions sobre tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            //Operacions sobre tabla blogs
            'ver-blog',
            'crear-blog',
            'editar-blog',
            'borrar-blog',

            //Operacions sobre tabla reporte de muestreos
            'ver-reporte-muestreo',
            'crear-reporte-muestreo',
            'editar-reporte-muestreo',
            'borrar-reporte-muestreo',
            'generar-pdf-reporte-muestreo',

            //Operacions sobre tabla reporte de muestreos
            'ver-orden-servicio',
            'crear-orden-servicio',
            'editar-orden-servicio',
            'borrar-orden-servicio',
            'generar-pdf-orden-servicio',

            //Operacions sobre tabla registro de cilindros
            'ver-registro-cilindro',
            'crear-registro-cilindro',
            'editar-registro-cilindro',
            'borrar-registro-cilindro',
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}