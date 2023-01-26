<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Listado de Orden de Servicios</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Listado de Orden de Servicios</h2>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>

                <th>Cliente</th>
                <th>Atencion a</th>
                <th>Obra</th>
                <th>Ubicacion</th>
                <th>Clave Obra</th>
                <th>Orden Serv</th>
                <th>F. Muestreo</th>
                <th>Muestreador a.</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($ordenServicios as $ordenServicio)
                <tr>
        
                    <td>{{ $ordenServicio->cliente }}</td>
                    <td>{{ $ordenServicio->atencion_a }}</td>
                    <td>{{ $ordenServicio->obra }}</td>
                    <td>{{ $ordenServicio->ubicacion }}</td>
                    <td>{{ $ordenServicio->clave_obra }}</td>
                    <td>{{ $ordenServicio->orden_servicio }}</td>
                    <td>{{ $ordenServicio->fecha_muestreo }}</td>
                    <td>{{ $ordenServicio->muestreador_asignado }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>