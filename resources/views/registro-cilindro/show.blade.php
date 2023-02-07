@extends('layouts.app')

@section('template_title')
    {{ $registroCilindro->name ?? 'Show Registro Cilindro' }}
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
                        <li class="breadcrumb-item"><a href="{{ route('registro-cilindros.index') }}">Registro de Cilindros</a></li>
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
                            <span class="card-title">Detalles de Especimen</span>
                        </div>
                        <div class="float-right">
                            <a href="" class="btn btn-sm btn-primary"  data-placement="left">
                            <i class="fas fa-file-pdf"></i>{{ __(' PDF') }}
                            </a>
                            &nbsp;
                            <a class="btn btn-sm btn-primary" href="{{ route('registro-cilindros.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Orden de Laboratorio: <p class="card-text">{{ $registroCilindro->orden_laboratorio }}</p></h3>
                                        <h3 class="card-title">Cliente: <p class="card-text">{{ $registroCilindro->cliente }}</p></h3>
                                        <h3 class="card-title">Obra: <p class="card-text">{{ $registroCilindro->obra }}</p></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col">
                                                <h3 class="card-title">Fecha de Muestreo: <p class="card-text">{{ $registroCilindro->fecha_muestreo }}</p></h3>
                                                <h3 class="card-title">Tipo de Concreto: <p class="card-text">{{ $registroCilindro->tipo_concreto }}</p></h3>
                                            </div>
                                            <div class="col">
                                                <h3 class="card-title">FcProy: <p class="card-text">{{ $registroCilindro->fcproy }}</p></h3>
                                                <h3 class="card-title">Revenimiento Obt: <p class="card-text">{{ $registroCilindro->rev_obt }}</p></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-header">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <strong>Datos de Programacion</strong>
                                        <div class="float-right">
                                            <a href="{{ route('registro-v1stas.edit',$registroCilindro->id) }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                                    <td>Hora inicio Cabeceo: {{ $registroCilindro->hora_inicio_cabeceo }}</td>
                                                    <td>Hora Final Cabeceo: {{ $registroCilindro->hora_final_cabeceo }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Hora inicio Ensayo: {{ $registroCilindro->hora_inicio_ensayo }}</td>
                                                    <td>Hora Fin Ensayo: {{ $registroCilindro->hora_final_ensayo }}</td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th></th><th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>Prensa: {{ $registroCilindro->prensa }}</td>
                                                    <td>Regla: {{ $registroCilindro->regla }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Bascula: {{ $registroCilindro->bascula }}</td>
                                                    <td>Termometro: {{ $registroCilindro->termometro }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Temperatura Ambiental: </td>
                                                    <td>{{ $registroCilindro->termometro }} </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card mb-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title">Ejes</h5>
                                    <p class="card-text">{{ $registroCilindro->ejes }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <strong>Especimenes:</strong>

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
                                        
                                        <th>No Muestra</th>
                                        <th>Clave de Ensayo</th>
                                        <th>Diametro 1 cm</th>
                                        <th>Diametro 2 cm</th>
                                        <th>Diametro Promedio cm</th>
                                        <th>Altura 1 cm</th>
                                        <th>Altura 2 cm</th>
                                        <th>Altura Promedio cm</th>
                                        <th>Peso kg</th>
                                        <th>Fecha Prueba a compresion</th>
                                        <th>Carga Ruptura tf</th>
                                        <th>Edad Dias</th>
                                        <th>Hora de ensaye</th>
                                        <th>Tipo de Falla</th>
                                        <th>Resp</th>
                                        <th>Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($muestras as $muestra)
                                        <tr>

                                            <td>{{ $muestra->numero_muestra }}</td>
                                            <td>{{ $muestra->numero_muestra }} - {{ $muestra->numero_molde }}</td>
                                            <td>15.10</td>
                                            <td>15.00</td>
                                            <td>15.05</td>
                                            <td>29.90</td>
                                            <td>29.90</td>
                                            <td>29.90</td>
                                            <td>12.30</td>
                                            <td> </td>
                                            <td>50315</td>
                                            <td>7</td>
                                            <td> </td>
                                            <td>1</td>
                                            <td> </td>
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
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection
