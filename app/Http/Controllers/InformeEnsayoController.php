<?php

namespace App\Http\Controllers;

use App\Models\InformeEnsayo;
use App\Models\ReporteMuestreo;
use App\Models\Muestra;
use Illuminate\Http\Request;

/**
 * Class InformeEnsayoController
 * @package App\Http\Controllers
 */
class InformeEnsayoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informeEnsayos = InformeEnsayo::paginate();

        return view('informe-ensayo.index', compact('informeEnsayos'))
            ->with('i', (request()->input('page', 1) - 1) * $informeEnsayos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $informeEnsayo = new InformeEnsayo();
        return view('informe-ensayo.create', compact('informeEnsayo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(InformeEnsayo::$rules);

        $informeEnsayo = InformeEnsayo::create($request->all());

        return redirect()->route('informe-ensayos.index')
            ->with('success', 'InformeEnsayo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $informeEnsayo = InformeEnsayo::find($id);

        $reporteMuestreo = ReporteMuestreo::find($id);

        $reporte = ReporteMuestreo::pluck('clave_obra');
        $muestras = Muestra::where('clave_obra', '=', 'A1')->get();

        return view('informe-ensayo.show', compact('informeEnsayo','reporteMuestreo', 'muestras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informeEnsayo = InformeEnsayo::find($id);

        return view('informe-ensayo.edit', compact('informeEnsayo'));
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

        return redirect()->route('informe-ensayos.index')
            ->with('success', 'InformeEnsayo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $informeEnsayo = InformeEnsayo::find($id)->delete();

        return redirect()->route('informe-ensayos.index')
            ->with('success', 'InformeEnsayo deleted successfully');
    }
}
