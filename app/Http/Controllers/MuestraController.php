<?php

namespace App\Http\Controllers;

use App\Models\ReporteMuestreo;
use App\Models\Muestra;
use Illuminate\Http\Request;
use PDF;

/**
 * Class MuestraController
 * @package App\Http\Controllers
 */
class MuestraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muestras = Muestra::paginate();

        return view('reporte-muestreo.show', compact('muestras'))
            ->with('i', (request()->input('page', 1) - 1) * $muestras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $muestra = new Muestra();
        $reporteMuestreo = ReporteMuestreo::pluck('clave_obra', 'clave_obra');

        return view('muestra.create', compact('muestra', 'reporteMuestreo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Muestra::$rules);

        $muestra = Muestra::create($request->all());

        return redirect()->route('reporte-muestreos.index')
            ->with('success', 'Muestra creada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $muestra = Muestra::find($id);

        return view('muestra.show', compact('muestra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $muestra = Muestra::find($id);
        $reporteMuestreo = ReporteMuestreo::pluck('clave_obra', 'clave_obra');
        
        return view('muestra.edit', compact('muestra', 'reporteMuestreo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Muestra $muestra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muestra $muestra)
    {
        request()->validate(Muestra::$rules);

        $muestra->update($request->all());

        return redirect()->route('reporte-muestreos.index')
            ->with('success', 'Muestra editada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $muestra = Muestra::find($id)->delete();

        return redirect()->route('reporte-muestreos.index')
            ->with('success', 'Muestra eliminada con exito');
    }
}
