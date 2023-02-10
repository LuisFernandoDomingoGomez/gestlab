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
                            <span class="card-title">Detalles de Informe de Ensayo</span>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('registro-vistas.show', $informeEnsayo->id) }}" class="btn btn-sm btn-primary"  data-placement="left">
								<i class="fas fa-file-pdf"></i>{{ __(' PDF') }}
                            </a>
                            &nbsp;
                            <a class="btn btn-sm btn-primary" href="{{ route('informe-ensayos.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="card">
                                    <div class="card-body">
                                    <strong>Datos de la Obra</strong>
                                    <br><br>
                                        <h5 class="card-title">Numero de Informe: {{ $informeEnsayo->numero_informe }}</h5>
                                        <h5 class="card-title">Obra: {{ $informeEnsayo->obra }}</h5>
                                        <h5 class="card-title">Ubicacion: {{ $informeEnsayo->ubicacion }}</h5>
                                        <h5 class="card-title">Propietario: {{ $informeEnsayo->propietario }}</h5>
                                        <h5 class="card-title">Supervicion: {{ $informeEnsayo->supervicion }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-header">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <strong>Datos de Programacion</strong>
                                        <div class="float-right">
                                            <a href="" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                            {{ __('Registrar') }}
                                            </a>
                                        </div>
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
                                                    <td>Fecha de Muestreo: {{ $informeEnsayo->fecha_muestreo }}</td>
                                                    <td>Edad de Diseno: {{ $informeEnsayo->edad_diseno }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha de Recepcion: {{ $informeEnsayo->fecha_muestreo }}</td>
                                                    <td>Fecha de Informe: {{ $informeEnsayo->fecha_informe }}</td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
