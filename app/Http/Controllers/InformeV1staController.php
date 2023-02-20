<?php

namespace App\Http\Controllers;

use App\Models\InformeEnsayo;
use App\Models\Muestra;
use Illuminate\Http\Request;

/**
 * Class InformeV1staController
 * @package App\Http\Controllers
 */
class InformeV1staController extends Controller
{

    public function edit($id)
    {
        $informeEnsayo = InformeEnsayo::find($id);

        return view('informe-v1sta.edit', compact('informeEnsayo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  InformeEnsayo $informeEnsayo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformeEnsayo $informeEnsayo)
    {
        request()->validate(InformeEnsayo::$rules);

        $informeEnsayo->update($request->all());

        return redirect()->route('informe-v1stas.index')
            ->with('success', 'Datos Registrados con éxito');
    }

}
