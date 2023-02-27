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
                                            <a href="{{ route('informe-v1stas.edit',$informeEnsayo->id) }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th></th><th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>Correo: nandodomingogomez@gmail.com</td>
                                                    <td>Telefono: 7224942848</td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
                                        <th>No de Olla</th>
                                        <th>Remision</th>
                                        <th>Hora de salida</th>
                                        <th>Hora de llegada</th>
                                        <th>Hora de descarga</th>
                                        <th>Proyecto</th>
                                        <th>Medido</th>
                                        <th>Visualizar</th>

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
                                            <td>{{ $reporteMuestreo->revenimiento }}</td>
                                            <td>{{ $muestra->uno_cm }}</td>
                                            <td>
                                                <form action="{{ route('muestras.destroy',$muestra->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registro-vistas.show', $informeEnsayo->id) }}"><i class="fas fa-file-pdf"></i></a>
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
                                                            <td>Muestreo</td>
                                                            <td>Elaboro especimenes</td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="card-footer text-muted">
                                            Nombre y/o Firma
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card text-center">

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
                                                            <td>Ensayo de Revenimiento</td>
                                                            <td>Cabeceo de Especimenes</td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="card-footer text-muted">
                                            Nombre y/o Firma
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card text-center">

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
                                                            <td>Ensayo de Especimenes</td>
                                                            <td>Reviso y autorizo</td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="card-footer text-muted">
                                            Nombre y/o Firma
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card text-center">

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead">
                                                    <tr></tr>
                                                </thead>
                                                <tbody> 
                                                        <tr>
                                                            <td><img src="{{ asset('argon') }}/img/generate/firma_cliente.png" class="card-img-top" alt="..." width=100 height=89></td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ $reporteMuestreo->transportista_2 }}</td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="card-footer text-muted">
                                            Nombre y Firma de Recibido por parte del cliente
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>
                </div>
            </div>
        </section>
    </div>
@endsection
