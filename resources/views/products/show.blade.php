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
        <div class="row mt-3">
            <h2 class=" border-bottom mb-3 text-danger">Detalle</h2>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('products.show') }}" method="POST">
                    @csrf<!-- directiva de seguridad, GARANTIZA QUE EL QUE ENVIAMOS EL FORMULARIO DESDE EL SITIO ADECUADO -->
                    <div class="mb-3">
                        <label for="product_id" class="form-label">Seleccione un producto:</label>

                        <!--  select para sacar el producto a mostrar -->

                        <select class="form-select" name="product_id">
                            @foreach($products as $productOption)
                            <option value="{{ $productOption->id }}">
                                {{ $productOption->name }}
                            </option>
                            @endforeach
                        </select>


                    </div>
                    <button type="submit" class="btn btn-primary">Mostrar Detalles</button>
                </form>
            </div>
        </div>


        <!--  card para mostrar el producto -->

        @isset($product)
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">$ {{ $product->price }}</p>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
        @endisset
    </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>