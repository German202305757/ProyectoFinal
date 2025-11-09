<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdoptaAmor - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
    .card-img-top {
        width: 100%;
        height: 250px;
        /* Altura fija para las imágenes */
        object-fit: cover;
    }
    </style>
</head>

<body class="d-flex flex-column vh-100">
    <?php
  if (!session()->get('activa') || session()->get('tipo') != 3) {
    echo "no tiene acceso";

  } else {


  ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../public/">🐾 AdoptaAmor</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido"
                    aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContenido">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Página Principal</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('mascotas_catalogo') ?>">Mascotas</a>
                        </li>
                        <li class="nav-item">

                        </li>
                    </ul>

                    <form class="d-flex">

                        <a href="<?= base_url('cerrar_sesion') ?>" class="btn btn-outline-light">Cerrar Sesión</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <section class="py-5 text-center container" style="padding-top: 100px !important;">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Bienvenido: <?= session()->get('usuario') ?> ID:
                        <?= session()->get('adoptante') ?></h1>
                    <h1 class="fw-light">Encuentra a tu Nuevo Mejor Amigo</h1>
                    <p class="lead text-muted">Explora nuestros catálogo de perros, gatos y otros animales que necesitan
                        un hogar amoroso. Tu próxima mascota te está esperando.</p>
                    <p>
                        <a href="<?= base_url('mascotas_catalogo') ?>" class="btn btn-primary my-2">Ver Mascotas
                            Disponibles</a>

                    </p>
                </div>
            </div>
        </section>



    </main>

    <footer class="text-muted py-5 bg-dark text-white mt-auto">
        <div class="container text-center">
            <p class="mb-1">&copy; 2025 Organización Refugio Animales. Todos los derechos reservados.</p>
            <p class="mb-0">
                <a href="#" class="text-white">Volver arriba</a> |
                <a href="#" class="text-white">Política de Privacidad</a> |
                <a href="<?= base_url('creditos') ?>" class="text-white">Créditos</a>
            </p>
        </div>
    </footer>
    <?php
  } 
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>