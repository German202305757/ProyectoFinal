<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdoptaAmor - Iniciar Sesión</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <style>
      /* Estilo opcional para que las imágenes de las tarjetas mantengan proporciones */
      .card-img-top {
        width: 100%;
        height: 250px; /* Altura fija para las imágenes */
        object-fit: cover; /* Asegura que la imagen cubra el espacio sin deformarse */
      }
      
      /* Estilo para centrar el formulario de login verticalmente */
      .login-section {
        min-height: calc(100vh - 142px); /* Ajusta esto según la altura de tu footer */
        display: flex;
        align-items: center;
      }
    </style>
  </head>
  <body class="bg-light">

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="../public/">🐾 AdoptaAmor</a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido" aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarContenido">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            </ul>
            
            <form class="d-flex">
              <button class="btn btn-outline-light" type="button">Iniciar Sesión</button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section class="py-5 login-section" style="padding-top: 100px !important;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
              
              <div class="card shadow-sm border-0">
                <div class="card-body p-4 p-md-5">
                  <h2 class="text-center fw-light mb-4">Iniciar Sesión</h2>
                  
                  <!-- Formulario de inicio de sesion -->
                  <form action="<?=base_url('iniciar_sesion')?>" method="POST"> 
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="txt_usuario" id="txt_usuario" placeholder="usuario" required>
                      <label for="txt_usuario">Usuario</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" name="txt_pass" id="txt_pass" placeholder="Contraseña" required>
                      <label for="txt_pass">Contraseña</label>
                    </div>
                    
                    <?php
                  if (isset($_GET['error']) && $_GET['error'] == '1') {
                    echo '<div class="alert alert-danger" role="alert">
                            Error: Las credenciales son incorrectas.
                          </div>';
                  } else if (isset($_GET['error']) && $_GET['error'] == '2') {
                    echo '<div class="alert alert-danger" role="alert">
                            Session cerrada correctamente.
                          </div>';
                  }

                  ?>
                    
                    <div class="d-grid">
                      <button class="btn btn-primary btn-lg" type="submit">Ingresar</button>
                    </div>
                    
                    <div class="text-center mt-4">
                      <p class="small mb-0">¿No tienes una cuenta? <a href="#" class="text-decoration-none">Regístrate aquí</a></p>
                    </div>
                    
                  </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>