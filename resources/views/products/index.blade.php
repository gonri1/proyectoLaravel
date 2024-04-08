<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    @extends("main")<!-- carga de vista main de cabecera -->
    @section("content")
    <div class="container mt-5">
        <div class="row">
            <h2 class=" border-bottom mb-3 text-danger">LISTADO DE PRODUCTOS</h2>
        </div>
        <div class="row">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!--       carga de cards de los productos  -->
                @foreach($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title bg-info-subtle">{{ $product->id }} {{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">$ {{ $product->price }}</p>

                            <!-- eiminacion de producto a traves de un formulario y un boton submit -->

                            <form action="{{ route('products.delete') }}" method="POST"><!-- la rura es el controlador -->
                                @csrf<!-- directiva de seguridad -->
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>



                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>