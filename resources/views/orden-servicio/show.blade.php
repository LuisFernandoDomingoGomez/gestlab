@extends('layouts.app')

@section('template_title')
    {{ $ordenServicio->name ?? 'Show Orden Servicio' }}
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
                                <span class="card-title">Show Orden Servicio</span>
                            </div>
                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('orden-servicios.index') }}"> Atras</a>
                            </div>
                        </div>

                        <div class="card-body">
                            
                            <div class="form-group">
                                <strong>Cliente:</strong>
                                {{ $ordenServicio->cliente }}
                            </div>
                            <div class="form-group">
                                <strong>Atencion A:</strong>
                                {{ $ordenServicio->atencion_a }}
                            </div>
                            <div class="form-group">
                                <strong>Obra:</strong>
                                {{ $ordenServicio->obra }}
                            </div>
                            <div class="form-group">
                                <strong>Ubicación:</strong>
                                {{ $ordenServicio->ubicación }}
                            </div>
                            <div class="form-group">
                                <strong>Clave Obra:</strong>
                                {{ $ordenServicio->clave_obra }}
                            </div>
                            <div class="form-group">
                                <strong>Orden Servicio:</strong>
                                {{ $ordenServicio->orden_servicio }}
                            </div>
                            <div class="form-group">
                                <strong>Fecha Muestreo:</strong>
                                {{ $ordenServicio->fecha_muestreo }}
                            </div>
                            <div class="form-group">
                                <strong>Muestreador Asignado:</strong>
                                {{ $ordenServicio->muestreador_asignado }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
