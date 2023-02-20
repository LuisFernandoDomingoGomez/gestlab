<?php

namespace App\Http\Controllers;

use App\Models\ReporteMuestreo;
use App\Models\Muestra;
use Illuminate\Http\Request;
use PDF;

/**
 * Class ReporteMuestreoController
 * @package App\Http\Controllers
 */
class ReporteMuestreoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-reporte-muestreo|crear-reporte-muestreo|editar-reporte-muestreo|borrar-reporte-muestreo|generar-pdf-reporte-muestreo')->only('index');
         $this->middleware('permission:crear-reporte-muestreo', ['only' => ['create','store']]);
         $this->middleware('permission:editar-reporte-muestreo', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-reporte-muestreo', ['only' => ['destroy']]);
         $this->middleware('permission:generar-pdf-reporte-muestreo', ['only' => ['pdf']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $reporteMuestreos = ReporteMuestreo::where('clave_obra','LIKE','%'.$busqueda.'%')
                          ->orWhere('orden_servicio','LIKE','%'.$busqueda.'%')
                          ->latest('id')
                          ->paginate(50);
        $data = [
            'reporteMuestreos'=>$reporteMuestreos,
            'busqueda'=>$busqueda,
        ];
 
        return view('reporte-muestreo.index', $data)
        ->with('i', (request()->input('page', 1) - 1) * $reporteMuestreos->perPage());
    }

    public function pdf()
    {
        $reporteMuestreos = ReporteMuestreo::paginate(128);

        $pdf = PDF::loadView('reporte-muestreo.pdf',['reporteMuestreos'=>$reporteMuestreos]);
        return $pdf->stream();
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

        $reporte = ReporteMuestreo::pluck('clave_obra');
        $muestras = Muestra::where('clave_obra', '=', 'A1')->get();

        return view('reporte-muestreo.show', compact('reporteMuestreo', 'muestras'));
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
