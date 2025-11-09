<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Solicitudes de adopción</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="bg-light">
  <?php
    //si no existe la variable de sesion activa(la cual se crea al logearse correctamente)
    if (!session()->get('activa') || session()->get('tipo') != 1) {
        echo "no tiene acceso";
        //return redirect()->to(base_url('/'));

    } else {
    ?>
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="../public/">🐾 AdoptaAmor</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido" aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarContenido">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url('menu_admin') ?>">Página Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('citas') ?>">Citas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('mascotas') ?>">Mascotas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('solicitudes') ?>">Solicitudes de Adopción</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('historialmedico') ?>">Historial Médico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('usuarios') ?>">Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('adoptantes') ?>">Adoptantes</a>
              </li>
            </ul>

            <form class="d-flex">
              
              <a href="<?= base_url('cerrar_sesion') ?>" class="btn btn-outline-light">Cerrar Sesión</a>
            </form>
          </div>
          
        </div>
      </nav>
    </header>

  <div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fw-bold text-primary mt-5"><i class="bi bi-people-fill me-2"></i>Solicitudes de adopción</h1>

      <!-- Botón que abre el modal -->
      <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-plus-circle me-1"></i> Nueva Solicitud
      </button>
    </div>

    <!-- Tabla -->
    <div class="card shadow">
      <div class="card-body">
        <table class="table table-hover align-middle">
          <thead class="table-primary">
            <tr>
              <th>No. de Solicitud</th>
              <th>ID Aspirante</th>
              <th>ID Mascota</th>
              <th>Estado de Solicitud</th>
              <th>Fecha Solicitud</th>
              <th>Fecha de Solicitud</th>
              <th>Comentario</th>
              <th class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($datos as $solicitud) { ?>
              <tr>
                <td><?= $solicitud['id_solicitud']; ?></td>
                <td><?= $solicitud['id_adoptante']; ?></td>
                <td><?= $solicitud['id_animal']; ?></td>
                <td><?= $solicitud['estado_solicitud']; ?></td>
                <td><?= $solicitud['fecha_solicitud']; ?></td>
                <td><?= $solicitud['comentario']; ?></td>
                <td class="text-center">
                  <a href="<?= base_url('eliminar_solicitud/') . $solicitud['id_solicitud']; ?>"
                    class="btn btn-sm btn-danger me-1">
                    <i class="bi bi-trash"></i>
                  </a>
                  <a href="<?= base_url('buscar_solicitud/') . $solicitud['id_solicitud']; ?>"
                    class="btn btn-sm btn-info text-white">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content border-0 shadow">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="exampleModalLabel">Nueva Solicitud</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <form action="<?= base_url('agregar_solicitud'); ?>" method="post">
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-4 form-floating">
                <input type="number" class="form-control" id="txt_id_solicitud" name="txt_id_solicitud" placeholder="No. de Solicitud">
                <label for="txt_id_solicitud">No. de Solicitud</label>
              </div>
              <div class="col-md-4 form-floating">
                <input type="text" class="form-control" id="txt_id_adoptante" name="txt_id_adoptante" placeholder="No. de adoptante">
                <label for="txt_id_adoptante">No. de Adoptante</label>
              </div>
              <div class="col-md-4 form-floating">
                <input type="text" class="form-control" id="txt__id_animal" name="txt__id_animal" placeholder="No. de mascota">
                <label for="txt__id_animal">No. de Mascota</label>
              </div>
              <div class="col-md-6 form-floating">
                <input type="text" class="form-control" id="txt_estado" name="txt_estado" placeholder="Estado de la solicitud">
                <label for="txt_estado">Estado de la solicitud</label>
              </div>
              <div class="col-md-6 form-floating">
                <input type="date" class="form-control" id="txt_fecha" name="txt_fecha" placeholder="Fecha">
                <label for="txt_fecha">Fecha</label>
              </div>
              <div class="col-md-6 form-floating">
                <input type="email" class="form-control" id="txt_correo" name="txt_correo" placeholder="Correo">
                <label for="txt_correo">Correo</label>
              </div>
              <div class="col-md-6 form-floating">
                <input type="text" class="form-control" id="txt_comentario" name="txt_comentario"
                  placeholder="Fecha de nacimiento">
                <label for="txt_comentario">Comentario</label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
   <?php
    } //fin del else que verifica si la sesion esta activa
    ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>
