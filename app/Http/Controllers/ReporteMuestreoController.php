<?php

namespace App\Http\Controllers;

use App\Models\ReporteMuestreo;
use Illuminate\Http\Request;

/**
 * Class ReporteMuestreoController
 * @package App\Http\Controllers
 */
class ReporteMuestreoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-reporte-muestreo|crear-reporte-muestreo|editar-reporte-muestreo|borrar-reporte-muestreo')->only('index');
         $this->middleware('permission:crear-reporte-muestreo', ['only' => ['create','store']]);
         $this->middleware('permission:editar-reporte-muestreo', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-reporte-muestreo', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reporteMuestreos = ReporteMuestreo::paginate();

        return view('reporte-muestreo.index', compact('reporteMuestreos'))
            ->with('i', (request()->input('page', 1) - 1) * $reporteMuestreos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reporteMuestreo = new ReporteMuestreo();
        return view('reporte-muestreo.create', compact('reporteMuestreo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ReporteMuestreo::$rules);

        $reporteMuestreo = ReporteMuestreo::create($request->all());

        return redirect()->route('reporte-muestreos.index')
            ->with('success', 'Reporte de Muestreo creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reporteMuestreo = ReporteMuestreo::find($id);

        return view('reporte-muestreo.show', compact('reporteMuestreo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reporteMuestreo = ReporteMuestreo::find($id);

        return view('reporte-muestreo.edit', compact('reporteMuestreo'));
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

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reporteMuestreo = ReporteMuestreo::find($id)->delete();

        return redirect()->route('reporte-muestreos.index')
            ->with('success', 'Reporte de Muestreo eliminado con éxito');
    }
}
