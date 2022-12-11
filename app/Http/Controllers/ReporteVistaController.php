<?php

namespace App\Http\Controllers;

use App\Models\ReporteMuestreo;
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

        return view('reporte-vista.show', compact('reporteVista'));
    }

}
