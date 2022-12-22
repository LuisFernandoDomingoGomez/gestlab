@extends('layouts.app')

@section('template_title')
    {{ $muestra->name ?? 'Show Muestra' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Muestra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('muestras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Clave Obra:</strong>
                            {{ $muestra->clave_obra }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Olla:</strong>
                            {{ $muestra->numero_olla }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Remision:</strong>
                            {{ $muestra->numero_remision }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Salida Planta:</strong>
                            {{ $muestra->hora_salida_planta }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Entrega Obra:</strong>
                            {{ $muestra->hora_entrega_obra }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Toma Muestra:</strong>
                            {{ $muestra->hora_toma_muestra }}
                        </div>
                        <div class="form-group">
                            <strong>Temperatura Ambiental Muestra:</strong>
                            {{ $muestra->temperatura_ambiental_muestra }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Termino Descarga:</strong>
                            {{ $muestra->hora_termino_descarga }}
                        </div>
                        <div class="form-group">
                            <strong>Volumen M3:</strong>
                            {{ $muestra->volumen_m3 }}
                        </div>
                        <div class="form-group">
                            <strong>Uno Cm:</strong>
                            {{ $muestra->uno_cm }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo Empleado:</strong>
                            {{ $muestra->tiempo_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Dos Cm:</strong>
                            {{ $muestra->dos_cm }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Muestra:</strong>
                            {{ $muestra->numero_muestra }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Molde:</strong>
                            {{ $muestra->numero_molde }}
                        </div>
                        <div class="form-group">
                            <strong>Elemento:</strong>
                            {{ $muestra->elemento }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $muestra->nivel }}
                        </div>
                        <div class="form-group">
                            <strong>Ejes:</strong>
                            {{ $muestra->ejes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
