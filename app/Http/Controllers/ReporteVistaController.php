<?php

namespace App\Http\Controllers;

use App\Models\ReporteMuestreo;
use App\Models\Muestra;
use Illuminate\Http\Request;

/**
 * Class ReporteVistaController
 * @package App\Http\Controllers
 */
class ReporteVistaController extends Controller
{

    public function show($id)
    {
        $reporteVista = ReporteMuestreo::find($id);
        $reporte = ReporteMuestreo::pluck('clave_obra');
        $muestras = Muestra::where('clave_obra', '=', 'A1')->get();

        return view('reporte-vista.show', compact('reporteVista', 'muestras'));
    }

}
