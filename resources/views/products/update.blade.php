<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    @extends("main")<!-- carga de vista main de cabecera -->
    @section("content")

    <div class="container mt-5">
        <h2 class="text-danger border-bottom">Modificación</h2>

        <!-- form para seleccionar producto  -->

        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('products.modifica') }}" method="POST">
                    @csrf<!-- directiva de seguridad -->
                    <div class="mb-3">
                        <label for="product_id" class="form-label">Seleccione un producto A:</label>

                        <!-- Seleccion de producto a actuazlizar -->

                        <select class="form-select" name="product_id">
                            @foreach($products1 as $productOption)
                            <option value="{{ $productOption->id }}">
                                {{ $productOption->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Mostrar</button>
                </form>
            </div>
        </div>

      <!--   Carga de datos en el formulario de update -->

      
        @isset($product)
        <div class="row">
            <h2 class="mt-3 border-top border-bottom text-danger">Actualiza el producto</h2>
            <div class="col-md-6 mx-auto mt-5">
                <form action="{{ route('products.update') }}" method="post">

                    @csrf <!-- directiva de seguridad, GARANTIZA QUE EL QUE ENVIAMOS EL FORMULARIO DESDE EL SITIO ADECUADO -->

                    <input type="number" class="form-control" id="id" name="id" value="{{ $product->id }}" hidden required>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                    </div>
                    @error('name')<!--Muestra de errores de validacion -->
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" value="{{ $product->description }}" required>{{ $product->description }}</textarea>
                    </div>

                    @error('description')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror

                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ $product->price }}" required>
                    </div>

                    @error('price')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror
                    <button type="submit" class="btn btn-primary">Modificar</button>

                </form>
            </div>
        </div>
        @endisset
        @endsection

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>