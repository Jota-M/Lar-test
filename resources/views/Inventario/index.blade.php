<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacén de Inventario</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
        }
        .container {
            max-width: 1200px;
        }
        .table th, .table td {
            text-align: center;
        }
        .table thead th {
            background-color: #f8f9fa;
        }
        .btn-custom {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Almacén de Inventario</h1>
        <div class="mb-3">
            <a href="{{url('Inventario/create')}}" class="btn btn-primary">Insertar nuevo libro</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Nombre Material</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventarios as $inventario)
                <tr>
                    <td>{{$inventario->id}}</td>
                    <td>{{$inventario->NombreM}}</td>
                    <td>${{$inventario->Precio}}</td>
                    <td>{{$inventario->Cantidad}}</td>
                    <td>
                        <a href="{{url('/Inventario/'.$inventario->id.'/edit')}}" class="btn btn-warning btn-custom">Editar</a>
                        <form action="{{url('/Inventario/'.$inventario->id)}}" method="post" style="display:inline;">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger btn-custom" onclick="return confirm('¿Está seguro de eliminar el registro?')">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
