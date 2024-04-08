<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<!-- PANTALLA DE INICIO, no es comun en el proyecto, es solo el inicio -->

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
        <div class="row">
            <div class="col-4">
                <img src="https://media.licdn.com/dms/image/D4E12AQEhSWRTreXYew/article-cover_image-shrink_600_2000/0/1694479065771?e=2147483647&v=beta&t=2fX6sWIIQzrJhYJfi6lFLXv42TExMElMe1QZaOexx4M" class="img-fluid bg-light" alt="...">
            </div>
            <div class="col-7 mx-auto mt-5">
                <h2 class="text-danger fw-bold border-bottom">¿Qué es Laravel en programación?</h2>
                <p class="fw-bold lh-base text-primary text-muted">
                    Laravel es un framework PHP gratis y de código abierto que brinda un conjunto de herramientas y recursos para crear aplicaciones modernas. Posee un ecosistema integral que combina funciones integradas y una variedad de paquetes y extensiones compatibles.

                    Este framework de PHP creció en popularidad rápidamente en los últimos años, y muchos desarrolladores lo adoptaron como su framework de trabajo favorito para lograr un proceso de desarrollo optimizado.

                    Para entender mejor qué es Laravel, citaremos una frase de su página web: “Laravel es un marco de aplicación web con una sintaxis expresiva y elegante. Ya sentamos las bases, liberándote para crear sin preocuparte por las cosas pequeñas”.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-8 mx-auto">
                <img class="img-fluid" src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/343735673/original/f44f6b9701a69cc7cc0ba267afb19002ba6db093/be-your-php-laravel-developer-for-sites-and-software.jpg" alt="">
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>