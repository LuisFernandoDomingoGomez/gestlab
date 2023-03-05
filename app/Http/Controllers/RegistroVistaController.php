<?php

namespace App\Http\Controllers;

use App\Models\RegistroCilindro;
use App\Models\InformeEnsayo;
use App\Models\Muestra;
use Illuminate\Http\Request;

/**
 * Class RegistroVistaController
 * @package App\Http\Controllers
 */
class RegistroVistaController extends Controller
{

    public function show($id)
    {
        $registroVista = InformeEnsayo::find($id);

        $muestras = Muestra::where('clave_obra', '=', 'A1')->get();

        return view('registro-vista.show', compact('registroVista', 'muestras'));
    }

}