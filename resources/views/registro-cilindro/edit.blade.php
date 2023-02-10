@extends('layouts.app')

@section('template_title')
    Update Registro Cilindro
@endsection

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">GESTLAB</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('registro-cilindros.index') }}">Reporte de Ensayos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edicion</li>
                </ol>
                </nav>
            </div>
            </div>
        </div>
    </div>
    <br>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Modificar Especimen</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('registro-cilindros.update', $registroCilindro->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('registro-cilindro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
