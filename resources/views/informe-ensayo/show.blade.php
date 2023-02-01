@extends('layouts.app')

@section('template_title')
    {{ $informeEnsayo->name ?? 'Show Informe Ensayo' }}
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
                <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Informe de Ensayo</a></li>
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
                            <span class="card-title">Show Informe Ensayo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('informe-ensayos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero Informe:</strong>
                            {{ $informeEnsayo->numero_informe }}
                        </div>
                        <div class="form-group">
                            <strong>Obra:</strong>
                            {{ $informeEnsayo->obra }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $informeEnsayo->ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            {{ $informeEnsayo->propietario }}
                        </div>
                        <div class="form-group">
                            <strong>Supervicion:</strong>
                            {{ $informeEnsayo->supervicion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Elaboracion:</strong>
                            {{ $informeEnsayo->fecha_elaboracion }}
                        </div>
                        <div class="form-group">
                            <strong>Localizacion:</strong>
                            {{ $informeEnsayo->localizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Olla:</strong>
                            {{ $informeEnsayo->numero_olla }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Remision:</strong>
                            {{ $informeEnsayo->numero_remision }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ensaye:</strong>
                            {{ $informeEnsayo->fecha_ensaye }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Salida:</strong>
                            {{ $informeEnsayo->hora_salida }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Llegada:</strong>
                            {{ $informeEnsayo->hora_llegada }}
                        </div>
                        <div class="form-group">
                            <strong>Mpa 7:</strong>
                            {{ $informeEnsayo->mpa_7 }}
                        </div>
                        <div class="form-group">
                            <strong>Mpa 14:</strong>
                            {{ $informeEnsayo->mpa_14 }}
                        </div>
                        <div class="form-group">
                            <strong>Mpa 28:</strong>
                            {{ $informeEnsayo->mpa_28 }}
                        </div>
                        <div class="form-group">
                            <strong>Kgf 7:</strong>
                            {{ $informeEnsayo->kgf_7 }}
                        </div>
                        <div class="form-group">
                            <strong>Kgf 14:</strong>
                            {{ $informeEnsayo->kgf_14 }}
                        </div>
                        <div class="form-group">
                            <strong>Kgf 28:</strong>
                            {{ $informeEnsayo->kgf_28 }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $informeEnsayo->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Firma Recibido Cliente:</strong>
                            {{ $informeEnsayo->firma_recibido_cliente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
