@extends('layouts.app')

@section('template_title')
    {{ $reporteMuestreo->name ?? 'Show Reporte Muestreo' }}
@endsection

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">GESTLAB</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Reporte de Muestreo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detalles</li>
                </ol>
                </nav>
            </div>
            </div>
        </div>
        </div>
        <br>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <span class="card-title">Detalles de Reporte</span>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('reporte-vistas.show', $reporteMuestreo->id) }}" class="btn btn-sm btn-primary"  data-placement="left">
								<i class="fas fa-file-pdf"></i>{{ __(' PDF') }}
								</a>
								&nbsp;
                                <a class="btn btn-sm btn-primary" href="{{ route('reporte-muestreos.index') }}"> Atras</a>
                            </div>
                        </div>

                        <div class="card-body">

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                <div class="card-body">
                                <strong>Programacion de servicio:</strong>
                                <hr>
                                    <h5 class="card-title">Cliente: {{ $reporteMuestreo->cliente }}</h5>
                                    <h5 class="card-title">Atencion A: {{ $reporteMuestreo->atencion_a }}</h5>
                                    <h5 class="card-title">Obra: {{ $reporteMuestreo->obra }}</h5>
                                    <h5 class="card-title">Ubicacion: {{ $reporteMuestreo->ubicacion }}</h5>
                                    <h5 class="card-title">Clave de Obra: {{ $reporteMuestreo->clave_obra }}</h5>
                                    <h5 class="card-title">Orden de Servicio: {{ $reporteMuestreo->orden_servicio }}</h5>
                                    <h5 class="card-title">Fecha de Muestreo: {{ $reporteMuestreo->fecha_muestreo }}</h5>
                                    <h5 class="card-title">Muestreador Asignado: {{ $reporteMuestreo->muestreador_asignado }}</h5>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h3 class="mb-0">Caracteristicas del concreto solicitado</h3>
                                            </div>
                                            <div class="col text-right">
                                                <a href="{{ route('reporte-muestreos.edit',$reporteMuestreo->id) }}" class="btn btn-sm btn-primary">Registrar</a>
                                            </div>
                                        </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="thead">
                                                <tr>
                                                    <th></th><th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td>Resistencia: {{ $reporteMuestreo->resistencia }}</td>
                                                        <td>Revenimiento: {{ $reporteMuestreo->revenimiento }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tipo de Aditivo: {{ $reporteMuestreo->tipo_aditivo }}</td>
                                                        <td>Tipo de Cemento: {{ $reporteMuestreo->tipo_cemento }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tipo de Concreto: {{ $reporteMuestreo->tipo_concreto }}</td>
                                                        <td>T.M.A (mm): {{ $reporteMuestreo->tamano_agregado_maximo }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tipo de Agregado: {{ $reporteMuestreo->tipo_agregado }}</td>
                                                        <td>Dosificacion: {{ $reporteMuestreo->dosificacion }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Premezcadora: {{ $reporteMuestreo->premezcadora }}</td>
                                                        <td>Marca de Cemento: {{ $reporteMuestreo->marca_cemento }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Edad de Ensayo: {{ $reporteMuestreo->edad_ensayo }}</td>
                                                        <td>Volumen Colado (m³): {{ $reporteMuestreo->volumen_colado }}</td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                            <strong>Muestras:</strong>

                                <div class="float-right">
                                    <a href="{{ route('muestras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('+ ADD') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
                                        <th>Numero Olla</th>
                                        <th>Numero Remision</th>
                                        <th>Hora Salida Planta</th>
                                        <th>Hora Entrega Obra</th>
                                        <th>Hora Toma Muestra</th>
                                        <th>TEMP °C</th>
                                        <th>Hora Termino Descarga</th>
                                        <th>Volumen M3</th>
                                        <th>Uno Cm</th>
                                        <th>Tiempo Empleado</th>
                                        <th>Dos Cm</th>
                                        <th>Numero Muestra</th>
                                        <th>Numero Molde</th>
                                        <th>Numero Cilindro</th>
                                        <th>Ejes</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($muestras as $muestra)
                                        <tr>

                                            <td>{{ $muestra->numero_olla }}</td>
                                            <td>{{ $muestra->numero_remision }}</td>
                                            <td>{{ $muestra->hora_salida_planta }}</td>
                                            <td>{{ $muestra->hora_entrega_obra }}</td>
                                            <td>{{ $muestra->hora_toma_muestra }}</td>
                                            <td>{{ $muestra->temperatura_ambiental_muestra }}</td>
                                            <td>{{ $muestra->hora_termino_descarga }}</td>
                                            <td>{{ $muestra->volumen_m3 }}</td>
                                            <td>{{ $muestra->uno_cm }}</td>
                                            <td>{{ $muestra->tiempo_empleado }}</td>
                                            <td>{{ $muestra->dos_cm }}</td>
                                            <td>{{ $muestra->numero_muestra }}</td>
                                            <td>{{ $muestra->numero_molde }}</td>
                                            <td>{{ $muestra->numero_cilindro }}</td>
                                            <td>{{ $muestra->ejes }}</td>

                                            <td>
                                                <form action="{{ route('muestras.destroy',$muestra->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('muestras.show',$muestra->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('muestras.edit',$muestra->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            Hora de LLegada del Muestreador
                                        </div>
                                        <div class="card-header">
                                            {{ $reporteMuestreo->hora_llegada_muestreador }}
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Entrega a Transportista</h4>
                                            <p class="card-text">{{ $reporteMuestreo->entrega_transportista }}</p>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead">
                                                    <tr></tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('argon') }}/img/generate/firma.jpg" class="card-img-top" alt="..." width=100 height=35></td>
                                                            <td><img src="{{ asset('argon') }}/img/generate/firma2.png" class="card-img-top" alt="..." width=100 height=35></td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ $reporteMuestreo->muestreador }}</td>
                                                            <td>{{ $reporteMuestreo->transportista_1 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Muestreador</td>
                                                            <td>Transportista</td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="card-footer text-muted">
                                            Nombre y/o Firma
                                        </div>
                                    </div>
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col">
                                                    <a href="{{ route('reporte-v2stas.edit',$reporteMuestreo->id) }}" class="btn btn-primary">Llenar Datos de Recepcion</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            Hora de Salida del Muestreador
                                        </div>
                                        <div class="card-header">
                                            {{ $reporteMuestreo->hora_salida_muestreador }}
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Entrega a Laboratorista</h4>
                                            <p class="card-text">{{ $reporteMuestreo->entrega_laboratorista }}</p>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead">
                                                    <tr></tr>
                                                </thead>
                                                <tbody> 
                                                        <tr>
                                                            <td><img src="{{ asset('argon') }}/img/generate/firma2.png" class="card-img-top" alt="..." width=100 height=35></td>
                                                            <td><img src="{{ asset('argon') }}/img/generate/firma3.png" class="card-img-top" alt="..." width=100 height=35></td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ $reporteMuestreo->transportista_2 }}</td>
                                                            <td>{{ $reporteMuestreo->laboratorista }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transportista</td>
                                                            <td>Laboratorista</td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="card-footer text-muted">
                                            Nombre y/o Firma
                                        </div>
                                    </div>
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col">
                                                    <a href="{{ route('reporte-v3stas.edit',$reporteMuestreo->id) }}" class="btn btn-primary">Llenar Datos de Recepcion</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <br><br>
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <strong>Observaciones de Laboratorio</strong>
                                    <div class="float-right">
                                        <a href="{{ route('reporte-v4stas.edit',$reporteMuestreo->id) }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                        {{ __('Registrar') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead">
                                        <tr></tr>
                                    </thead>
                                    <tbody> 
                                            <tr>
                                                <td>Temp Ambiental (°C) y Humedad Relativa (%) a la hora del muestreo: {{ $reporteMuestreo->temperatura_humedad }}</td>
                                                <td>ID. Termometro: {{ $reporteMuestreo->id_termometro }}</td>
                                                <td>ID. Varilla: {{ $reporteMuestreo->id_varilla }}</td>
                                                <td>ID. Cono: {{ $reporteMuestreo->id_cono }}</td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br><br>

                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <strong>Datos de Revision</strong>
                                    <div class="float-right">
                                        <a href="{{ route('reporte-v5stas.edit',$reporteMuestreo->id) }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                        {{ __('Llenar') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-group">
                                <div class="card text-center">
                                    <div class="card-body">
                                    <h5 class="card-title">Desviaciones y Exclusiones que se presentaron</h5>
                                    <p class="card-text">{{ $reporteMuestreo->desviaciones_exclusiones }}</p>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="card-body">
                                    <h5 class="card-title">Nombre y/o Firma de revision</h5>
                                    <p class="card-text"> </p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $reporteMuestreo->nombre_firma_revision }}</small>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="card-body">
                                    <h5 class="card-title">Nombre y Firma del encargado de obra</h5>
                                    <p class="card-text"> </p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $reporteMuestreo->nombre_firma_encargado }}</small>
                                    </div>
                                </div>
                            </div>
                            <br><br>

                            <div class="card mb-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Observaciones a Considerar</h5>
                                        <p class="card-text">{{ $reporteMuestreo->observaciones_considerar }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection