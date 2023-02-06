<?php

namespace App\Http\Controllers;

use App\Models\ReporteMuestreo;
use App\Models\Muestra;
use Illuminate\Http\Request;

/**
 * Class ReporteVistaController
 * @package App\Http\Controllers
 */
class ReporteV5staController extends Controller
{

    public function edit($id)
    {
        $reporteMuestreo = ReporteMuestreo::find($id);

        return view('reporte-v5sta.edit', compact('reporteMuestreo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ReporteMuestreo $reporteMuestreo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReporteMuestreo $reporteMuestreo)
    {
        request()->validate(ReporteMuestreo::$rules);

        $reporteMuestreo->update($request->all());

        return redirect()->route('reporte-muestreos.index')
            ->with('success', 'Reporte de Muestreo editado con éxito');
    }

}
