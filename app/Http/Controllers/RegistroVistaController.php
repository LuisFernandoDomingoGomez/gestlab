<?php

namespace App\Http\Controllers;

use App\Models\RegistroCilindro;
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
        $registroVista = RegistroCilindro::find($id);

        return view('registro-vista.show', compact('registroVista'));
    }

}