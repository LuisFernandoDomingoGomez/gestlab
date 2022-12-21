<?php

namespace App\Http\Controllers;

use App\Models\OrdenServicio;
use Illuminate\Http\Request;
use PDF;

/**
 * Class OrdenServicioController
 * @package App\Http\Controllers
 */
class OrdenServicioController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-orden-servicio|crear-orden-servicio|editar-orden-servicio|borrar-orden-servicio|generar-pdf-orden-servicio')->only('index');
         $this->middleware('permission:crear-orden-servicio', ['only' => ['create','store']]);
         $this->middleware('permission:editar-orden-servicio', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-orden-servicio', ['only' => ['destroy']]);
         $this->middleware('permission:generar-pdf-orden-servicio', ['only' => ['pdf']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $ordenServicios = OrdenServicio::where('clave_obra','LIKE','%'.$busqueda.'%')
                          ->orWhere('orden_servicio','LIKE','%'.$busqueda.'%')
                          ->latest('id')
                          ->paginate(50);
        $data = [
            'ordenServicios'=>$ordenServicios,
            'busqueda'=>$busqueda,
        ];
 
        return view('orden-servicio.index', $data)
        ->with('i', (request()->input('page', 1) - 1) * $ordenServicios->perPage());
    }

    public function pdf()
    {
        $ordenServicios = OrdenServicio::paginate(128);

        $pdf = PDF::loadView('orden-servicio.pdf',['ordenServicios'=>$ordenServicios]);
        return $pdf->setPaper('a4', 'landscape')->stream('orden-servicio.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordenServicio = new OrdenServicio();
        return view('orden-servicio.create', compact('ordenServicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OrdenServicio::$rules);

        $ordenServicio = OrdenServicio::create($request->all());

        return redirect()->route('orden-servicios.index')
            ->with('success', 'Orden de Servicio creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordenServicio = OrdenServicio::find($id);

        return view('orden-servicio.show', compact('ordenServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordenServicio = OrdenServicio::find($id);

        return view('orden-servicio.edit', compact('ordenServicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OrdenServicio $ordenServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenServicio $ordenServicio)
    {
        request()->validate(OrdenServicio::$rules);

        $ordenServicio->update($request->all());

        return redirect()->route('orden-servicios.index')
            ->with('success', 'Orden de Servicio editada con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ordenServicio = OrdenServicio::find($id)->delete();

        return redirect()->route('orden-servicios.index')
            ->with('success', 'Orden de Servicio eliminada con éxito');
    }
}
