<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Inventario</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 600px; /* Ajustar el tamaño máximo del contenedor */
        }
        .form-label {
            font-size: 1.1rem;
            font-weight: 500;
        }
        .form-control {
            font-size: 1rem;
            border-radius: 0.375rem;
            padding: 0.75rem 1.25rem;
        }
        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
            font-size: 1.1rem;
            border-radius: 0.375rem;
            padding: 0.75rem;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            color: #ffffff;
        }
        .header {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
        }
        .mb-3 {
            margin-bottom: 1.5rem;
        }
        h2{
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center header mb-4">ACTUALIZAR INVENTARIO</h2>
        <form action="{{ url('/Inventario/' . $inventario->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Material</label><br>
                <input type="text" name="NombreM" id="nombre" class="form-control" value="{{ $inventario->NombreM }}" required>
            </div>
            
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label><br>
                <input type="number" step="any" name="Precio" id="precio" class="form-control" value="{{ $inventario->Precio }}" required>
            </div>
            
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label><br>
                <input type="number" name="Cantidad" id="cantidad" class="form-control" value="{{ $inventario->Cantidad }}" required>
            </div>
            
            <button type="submit" class="btn btn-custom w-100">Guardar Datos</button>
        </form>
    </div>

    <!-- Incluir Bootstrap JS y dependencias -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
