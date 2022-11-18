<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Lista_de_usuarios</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Lista de Usuarios</h2>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>

                <th>Nombre</th>

                <th>Email</th>

                <th>Rol</th>

                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>

                    <td>{{ $user->name }}</td>

                    <td>{{ $user->email }}</td>

                    <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $rolNombre)                                       
                            <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                            @endforeach
                        @endif
                    </td>

                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>