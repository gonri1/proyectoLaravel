<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    @extends("main")<!-- carga de vista main de cabecera -->
    @section("content")
    <div class="container mt-5">
        <div class="row mt-3">
            <h2 class=" border-bottom mb-3 text-danger">Agregar Nuevo Producto</h2>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 mx-auto">

                <!-- formulario de creacion de producto -->

                <form action="{{ route('products.store') }}" method="POST">

                    @csrf <!-- directiva de seguridad, GARANTIZA QUE EL QUE ENVIAMOS EL FORMULARIO DESDE EL SITIO ADECUADO -->


                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                       
                        @error('price')<!--Muestra de errores de validacion -->
                        <br>
                        <small>*{{ $message }}</small>
                        <br>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                        @error('description')
                        <br>
                        <small>*{{ $message }}</small>
                        <br>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                        @error('price')
                        <br>
                        <small>*{{ $message }}</small>
                        <br>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Producto</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>