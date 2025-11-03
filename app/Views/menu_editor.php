<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdoptaAmor - Inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <style>
    /* Estilo opcional para que las imágenes de las tarjetas mantengan proporciones */
    .card-img-top {
      width: 100%;
      height: 250px;
      /* Altura fija para las imágenes */
      object-fit: cover;
      /* Asegura que la imagen cubra el espacio sin deformarse */
    }
  </style>
</head>

<body>
  <?php
  //si no existe la variable de sesion activa(la cual se crea al logearse correctamente)
  if (!session()->get('activa') || session()->get('tipo') != 2) {
    echo "no tiene acceso";
    //return redirect()->to(base_url('/'));

  } else {


  ?>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">🐾 AdoptaAmor</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido" aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarContenido">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Página Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mascotas</a>
              </li>
            </ul>

            <form class="d-flex">
              <h2>Bienvenido(a): <?= session()->get('nombre') ?></h2>
              <button class="btn btn-outline-light" type="button">Iniciar Sesión</button>
              <a href="<?= base_url('cerrar_sesion') ?>"> Cerrar Sesión</a>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <main>

      <section class="py-5 text-center container" style="padding-top: 100px !important;">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Encuentra a tu Nuevo Mejor Amigo</h1>
            <p class="lead text-muted">Explora cientos de perros, gatos y otros animales que necesitan un hogar amoroso. Tu próxima mascota te está esperando.</p>
            <p>
              <a href="#" class="btn btn-primary my-2">Ver Mascotas Disponibles</a>
              <a href="#" class="btn btn-secondary my-2">Cómo Adoptar</a>
            </p>
          </div>
        </div>
      </section>

      <section class="album py-5 bg-light">
        <div class="container">
          <h2 class="text-center mb-4">Conoce a Algunos Amigos</h2>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <div class="col">
              <div class="card shadow-sm h-100">

                <img src="https://via.placeholder.com/400x250/ccc/808080?text=Max+(Perro)" class="card-img-top" alt="Perro adorable en adopción">
                <div class="card-body">
                  <h5 class="card-title">Max</h5>
                  <p class="card-text">Max es un labrador juguetón de 2 años. Le encanta correr y buscar la pelota. ¡Es perfecto para una familia activa!</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver Perfil</button>
                    </div>
                    <small class="text-muted">Refugio Central</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm h-100">

                <img src="https://via.placeholder.com/400x250/ccc/808080?text=Luna+(Gata)" class="card-img-top" alt="Gata tranquila en adopción">
                <div class="card-body">
                  <h5 class="card-title">Luna</h5>
                  <p class="card-text">Luna es una gata tranquila de 3 años. Adora las siestas al sol y las caricias. Ideal para un hogar tranquilo.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver Perfil</button>
                    </div>
                    <small class="text-muted">Refugio Norte</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm h-100">

                <img src="https://via.placeholder.com/400x250/ccc/808080?text=Tambor+(Conejo)" class="card-img-top" alt="Conejo curioso en adopción">
                <div class="card-body">
                  <h5 class="card-title">Tambor</h5>
                  <p class="card-text">Tambor es un conejo curioso y amigable. Le encanta la lechuga y explorar túneles de juguete.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver Perfil</button>
                    </div>
                    <small class="text-muted">Área de Pequeños</small>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

    </main>

    <footer class="text-muted py-5 bg-dark text-white">
      <div class="container text-center">
        <p class="mb-1">&copy; 2025 Organización AdoptaAmor. Todos los derechos reservados.</p>
        <p class="mb-0">
          <a href="#" class="text-white">Volver arriba</a> |
          <a href="#" class="text-white">Política de Privacidad</a> |
          <a href="#" class="text-white">Contacto</a>
        </p>
      </div>
    </footer>
  <?php
  } //fin del else que verifica si la sesion esta activa
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>