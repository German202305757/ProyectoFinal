<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Historial Medico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="bg-light">
    <?php
    if (!session()->get('activa') || session()->get('tipo') != 1) {
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
                            <a class="nav-link active" aria-current="page" href="<?= base_url('menu_admin') ?>">Página
                                Principal</a>
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
            <h1 class="fw-bold text-primary mt-5"><i class="bi bi-flag-fill me-2"></i>Historial Medico</h1>

            <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus-circle me-1"></i> Agregar Registro
            </button>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>No. de Registro</th>
                            <th>Codigo de animal</th>
                            <th>Vacuna</th>
                            <th>Tratamiento</th>
                            <th>Fecha de Revisión</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $historial) { ?>
                        <tr>
                            <td><?= $historial['id_historial']; ?></td>
                            <td><?= $historial['id_animal']; ?></td>
                            <td><?= $historial['vacunas_aplicadas']; ?></td>
                            <td><?= $historial['tratamiento']; ?></td>
                            <td><?= $historial['fecha_revision']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('eliminarregistro/') . $historial['id_historial']; ?>"
                                    class="btn btn-sm btn-danger me-1">
                                    <i class="bi bi-trash"></i>
                                </a>

                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Cerrar"></button>
                </div>
                <form action="<?= base_url('agregarregistro'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="txt_id_historial" name="txt_id_historial"
                                placeholder="Código de Historial">
                            <label for="txt_id_historial">Código de Registro</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="txt_id_animal" name="txt_id_animal"
                                placeholder="Código de la mascota">
                            <label for="txt_id_animal">Código de mascota</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txt_vacunas" name="txt_vacunas"
                                placeholder="Vacunas">
                            <label for="txt_vacunas">Vacunas</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txt_tratamiento" name="txt_tratamiento"
                                placeholder="Tratamiento">
                            <label for="txt_tratamiento">Tratamiento</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="txt_fecha" name="txt_fecha"
                                placeholder="Fecha del Tratamiento">
                            <label for="txt_fecha">Fecha del tratamiento</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="text-center mt-4 mb-3 text-secondary">
            Refugio de Animales © <?= date('Y'); ?> | Sistema de Gestión de Historial Medico
        </footer>
    </div>
    <?php
    } 
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>