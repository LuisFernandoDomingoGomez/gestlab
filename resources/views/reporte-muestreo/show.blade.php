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
								<a href="{{ route('reporte-vistas.show',$reporteMuestreo->id) }}" class="btn btn-primary"  data-placement="left">
								{{ __('Ver') }}
								</a>
								&nbsp;
                                <a class="btn btn-primary" href="{{ route('reporte-muestreos.index') }}"> Atras</a>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <strong>Cliente:</strong>
                                {{ $reporteMuestreo->cliente }}
                            </div>
                            <div class="form-group">
                                <strong>Atencion A:</strong>
                                {{ $reporteMuestreo->atencion_a }}
                            </div>
                            <div class="form-group">
                                <strong>Obra:</strong>
                                {{ $reporteMuestreo->obra }}
                            </div>
                            <div class="form-group">
                                <strong>Ubicación:</strong>
                                {{ $reporteMuestreo->ubicación }}
                            </div>
                            <div class="form-group">
                                <strong>Clave Obra:</strong>
                                {{ $reporteMuestreo->clave_obra }}
                            </div>
                            <div class="form-group">
                                <strong>Orden Servicio:</strong>
                                {{ $reporteMuestreo->orden_servicio }}
                            </div>
                            <div class="form-group">
                                <strong>Fecha Muestreo:</strong>
                                {{ $reporteMuestreo->fecha_muestreo }}
                            </div>
                            <div class="form-group">
                                <strong>Muestreador Asignado:</strong>
                                {{ $reporteMuestreo->muestreador_asignado }}
                            </div>
                            <div class="form-group">
                                <strong>Resistencia:</strong>
                                {{ $reporteMuestreo->resistencia }}
                            </div>
                            <div class="form-group">
                                <strong>Tipo Aditivo:</strong>
                                {{ $reporteMuestreo->tipo_aditivo }}
                            </div>
                            <div class="form-group">
                                <strong>Tamano Agregado Maximo:</strong>
                                {{ $reporteMuestreo->tamano_agregado_maximo }}
                            </div>
                            <div class="form-group">
                                <strong>Tipo Agregado:</strong>
                                {{ $reporteMuestreo->tipo_agregado }}
                            </div>
                            <div class="form-group">
                                <strong>Premezcadora:</strong>
                                {{ $reporteMuestreo->premezcadora }}
                            </div>
                            <div class="form-group">
                                <strong>Edad Ensayo:</strong>
                                {{ $reporteMuestreo->edad_ensayo }}
                            </div>
                            <div class="form-group">
                                <strong>Revenimiento:</strong>
                                {{ $reporteMuestreo->revenimiento }}
                            </div>
                            <div class="form-group">
                                <strong>Tipo Cemento:</strong>
                                {{ $reporteMuestreo->tipo_cemento }}
                            </div>
                            <div class="form-group">
                                <strong>Dosificacion:</strong>
                                {{ $reporteMuestreo->dosificacion }}
                            </div>
                            <div class="form-group">
                                <strong>Marca Cemento:</strong>
                                {{ $reporteMuestreo->marca_cemento }}
                            </div>
                            <div class="form-group">
                                <strong>Volumen Colado:</strong>
                                {{ $reporteMuestreo->volumen_colado }}
                            </div>
                            <div class="form-group">
                                <strong>Numero Olla:</strong>
                                {{ $reporteMuestreo->numero_olla }}
                            </div>
                            <div class="form-group">
                                <strong>Numero Remision:</strong>
                                {{ $reporteMuestreo->numero_remision }}
                            </div>
                            <div class="form-group">
                                <strong>Hora Salida Planta:</strong>
                                {{ $reporteMuestreo->hora_salida_planta }}
                            </div>
                            <div class="form-group">
                                <strong>Hora Entrega Obra:</strong>
                                {{ $reporteMuestreo->hora_entrega_obra }}
                            </div>
                            <div class="form-group">
                                <strong>Hora Toma Muestra:</strong>
                                {{ $reporteMuestreo->hora_toma_muestra }}
                            </div>
                            <div class="form-group">
                                <strong>Temperatura Ambiental Muestra:</strong>
                                {{ $reporteMuestreo->temperatura_ambiental_muestra }}
                            </div>
                            <div class="form-group">
                                <strong>Hora Termino Descarga:</strong>
                                {{ $reporteMuestreo->hora_termino_descarga }}
                            </div>
                            <div class="form-group">
                                <strong>Volumen M3:</strong>
                                {{ $reporteMuestreo->volumen_m3 }}
                            </div>
                            <div class="form-group">
                                <strong>Uno Cm:</strong>
                                {{ $reporteMuestreo->uno_cm }}
                            </div>
                            <div class="form-group">
                                <strong>Tiempo Empleado:</strong>
                                {{ $reporteMuestreo->tiempo_empleado }}
                            </div>
                            <div class="form-group">
                                <strong>Dos Cm:</strong>
                                {{ $reporteMuestreo->dos_cm }}
                            </div>
                            <div class="form-group">
                                <strong>Numero Muestra:</strong>
                                {{ $reporteMuestreo->numero_muestra }}
                            </div>
                            <div class="form-group">
                                <strong>Numero Molde:</strong>
                                {{ $reporteMuestreo->numero_molde }}
                            </div>
                            <div class="form-group">
                                <strong>Elemento:</strong>
                                {{ $reporteMuestreo->elemento }}
                            </div>
                            <div class="form-group">
                                <strong>Nivel:</strong>
                                {{ $reporteMuestreo->nivel }}
                            </div>
                            <div class="form-group">
                                <strong>Ejes:</strong>
                                {{ $reporteMuestreo->ejes }}
                            </div>
                            <div class="form-group">
                                <strong>Hora Llegada Muestreador:</strong>
                                {{ $reporteMuestreo->hora_llegada_muestreador }}
                            </div>
                            <div class="form-group">
                                <strong>Entrega Transportista:</strong>
                                {{ $reporteMuestreo->entrega_transportista }}
                            </div>
                            <div class="form-group">
                                <strong>Muestreador:</strong>
                                {{ $reporteMuestreo->muestreador }}
                            </div>
                            <div class="form-group">
                                <strong>Transportista 1:</strong>
                                {{ $reporteMuestreo->transportista_1 }}
                            </div>
                            <div class="form-group">
                                <strong>Hora Salida Muestreador:</strong>
                                {{ $reporteMuestreo->hora_salida_muestreador }}
                            </div>
                            <div class="form-group">
                                <strong>Entrega Laboratorista:</strong>
                                {{ $reporteMuestreo->entrega_laboratorista }}
                            </div>
                            <div class="form-group">
                                <strong>Transportista 2:</strong>
                                {{ $reporteMuestreo->transportista_2 }}
                            </div>
                            <div class="form-group">
                                <strong>Laboratorista:</strong>
                                {{ $reporteMuestreo->laboratorista }}
                            </div>
                            <div class="form-group">
                                <strong>Condicion Ambiental Muestreo:</strong>
                                {{ $reporteMuestreo->condicion_ambiental_muestreo }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection