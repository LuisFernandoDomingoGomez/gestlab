<?php

namespace App\Http\Controllers;

use App\Models\RegistroCilindro;
use App\Models\Muestra;
use Illuminate\Http\Request;

/**
 * Class RegistroV1staController
 * @package App\Http\Controllers
 */
class RegistroV2staController extends Controller
{

    public function edit($id)
    {
        $registroCilindro = RegistroCilindro::find($id);

        return view('registro-v2sta.edit', compact('registroCilindro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RegistroCilindro $registroCilindro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroCilindro $registroCilindro)
    {
        request()->validate(RegistroCilindro::$rules);

        $registroCilindro->update($request->all());

        return redirect()->route('registro-cilindros.index')
            ->with('success', 'Datos Registrados con éxito');
    }

}
