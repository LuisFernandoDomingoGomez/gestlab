<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Listado de Muestreos</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Listado de Muestreos</h2>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>

                <th>Cliente</th>
                <th>Obra</th>
                <th>Clave Obra</th>
                <th>Orden Servicio</th>
                <th>Fecha Muestreo</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($reporteMuestreos as $reporteMuestreo)
                <tr>
        
                    <td>{{ $reporteMuestreo->cliente }}</td>
                    <td>{{ $reporteMuestreo->obra }}</td>
                    <td>{{ $reporteMuestreo->clave_obra }}</td>
                    <td>{{ $reporteMuestreo->orden_servicio }}</td>
                    <td>{{ $reporteMuestreo->fecha_muestreo }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>