<?php

namespace App\Http\Controllers;

use App\Models\RegistroCilindro;
use Illuminate\Http\Request;

/**
 * Class RegistroCilindroController
 * @package App\Http\Controllers
 */
class RegistroCilindroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:ver-registro-cilindro|crear-registro-cilindro|editar-registro-cilindro|borrar-registro-cilindro')->only('index');
        $this->middleware('permission:crear-registro-cilindro', ['only' => ['create','store']]);
        $this->middleware('permission:editar-registro-cilindro', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-registro-cilindro', ['only' => ['destroy']]);
    }

    public function index()
    {
        $registroCilindros = RegistroCilindro::paginate();

        return view('registro-cilindro.index', compact('registroCilindros'))
            ->with('i', (request()->input('page', 1) - 1) * $registroCilindros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registroCilindro = new RegistroCilindro();
        return view('registro-cilindro.create', compact('registroCilindro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RegistroCilindro::$rules);

        $registroCilindro = RegistroCilindro::create($request->all());

        return redirect()->route('registro-cilindros.index')
            ->with('success', 'Cilindro creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registroCilindro = RegistroCilindro::find($id);

        return view('registro-cilindro.show', compact('registroCilindro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registroCilindro = RegistroCilindro::find($id);

        return view('registro-cilindro.edit', compact('registroCilindro'));
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
            ->with('success', 'Cilindro editado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $registroCilindro = RegistroCilindro::find($id)->delete();

        return redirect()->route('registro-cilindros.index')
            ->with('success', 'Cilindro eliminado con éxito');
    }
}
