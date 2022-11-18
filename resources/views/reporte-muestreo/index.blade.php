@extends('layouts.app')

@section('template_title')
    Reporte Muestreo
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
					<li class="breadcrumb-item"><a href="{{ route('reporte-muestreos.index') }}">Reporte de Muestreo</a></li>
					<li class="breadcrumb-item active" aria-current="page">Inicio</li>
				</ol>
				</nav>
			</div>
			</div>
		</div>
		</div>
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<div style="display: flex; justify-content: space-between; align-items: center;">

								<span id="card_title">
									{{ __('Registros') }}
								</span>

								<div class="float-right">
									<a href="{{ route('reporte-muestreo.pdf') }}" class="btn btn-primary btn-sm"  data-placement="left">
									{{ __('PDF') }}
									</a>
									&nbsp;
									<a href="{{ route('reporte-muestreos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
									{{ __('Crear Nuevo') }}
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
											
											<th>Cliente</th>
											<th>Obra</th>
											<th>Clave Obra</th>
											<th>Orden Servicio</th>
											<th>Fecha Muestreo</th>

											<th>Acciones</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($reporteMuestreos as $reporteMuestreo)
											<tr>
												<td>{{ ++$i }}</td>
												
												<td>{{ $reporteMuestreo->cliente }}</td>
												<td>{{ $reporteMuestreo->obra }}</td>
												<td>{{ $reporteMuestreo->clave_obra }}</td>
												<td>{{ $reporteMuestreo->orden_servicio }}</td>
												<td>{{ $reporteMuestreo->fecha_muestreo }}</td>
												
												<td>
													<form action="{{ route('reporte-muestreos.destroy',$reporteMuestreo->id) }}" method="POST">
														<a class="btn btn-sm btn-primary " href="{{ route('reporte-muestreos.show',$reporteMuestreo->id) }}"><i class="fa fa-fw fa-eye"></i></a>
														<a class="btn btn-sm btn-success" href="{{ route('reporte-muestreos.edit',$reporteMuestreo->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
					{!! $reporteMuestreos->links() !!}
				</div>
			</div>
		</div>
@endsection
