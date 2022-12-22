@extends('layouts.app')

@section('template_title')
    Muestra
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Muestra') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('muestras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Clave Obra</th>
										<th>Numero Olla</th>
										<th>Numero Remision</th>
										<th>Hora Salida Planta</th>
										<th>Hora Entrega Obra</th>
										<th>Hora Toma Muestra</th>
										<th>Temperatura Ambiental Muestra</th>
										<th>Hora Termino Descarga</th>
										<th>Volumen M3</th>
										<th>Uno Cm</th>
										<th>Tiempo Empleado</th>
										<th>Dos Cm</th>
										<th>Numero Muestra</th>
										<th>Numero Molde</th>
										<th>Elemento</th>
										<th>Nivel</th>
										<th>Ejes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($muestras as $muestra)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $muestra->clave_obra }}</td>
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
											<td>{{ $muestra->elemento }}</td>
											<td>{{ $muestra->nivel }}</td>
											<td>{{ $muestra->ejes }}</td>

                                            <td>
                                                <form action="{{ route('muestras.destroy',$muestra->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('muestras.show',$muestra->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('muestras.edit',$muestra->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $muestras->links() !!}
            </div>
        </div>
    </div>
@endsection
