<!-- resources/views/errors/file_not_found.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo no encontrado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding: 50px;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h1 {
            color: #e74c3c;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .btn {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Error!</h1>
        <p>El archivo que intentas descargar no existe o ha sido eliminado.</p>
        <button onclick="window.close()" class="btn">Cerrar</button>
    </div>

    <script>
        if (!window.opener) {
            document.querySelector('button').style.display = 'none';
        }
    </script>
</body>
</html>
