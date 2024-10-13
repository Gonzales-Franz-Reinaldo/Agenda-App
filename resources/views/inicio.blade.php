<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="menu">
            <a href="">Inicio</a>
            <a  onclick="cargarComponente('/agenda')">Agenda</a>
            <a onclick="cargarComponente('/profesion')">Profesión</a>
        </div>
        <div class="main">
            <div class="header">
                <h1>Agenda</h1>
            </div>
            <!-- Aquí es donde cargaremos los componentes -->
            <div class="contenido" id="contenido"></div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
