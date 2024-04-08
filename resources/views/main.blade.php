<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<!-- VISTA DE CABECERA COMUN EN TODO EL PROYECTO -->

<body class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-warning border-bottom">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Crud Laravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                            <a class="nav-link text-danger fw-semibold icon-link icon-link-hover" href="{{ route('nav') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">Listado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('products.show') }}">Muestra</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('products.create') }}">Crear</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.modifica') }}">Modificar</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')     
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>