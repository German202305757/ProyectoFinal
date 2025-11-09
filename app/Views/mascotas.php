<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mascotas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <?php
    if (!session()->get('activa') ) {
        echo "no tiene acceso";

    } else {
    ?>
    <header class="mb-3">
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
    <div class="container my-5 mt-5">
        <h1 class="display-4 text-primary fw-bold text-center mb-4">🐾 Mascotas 🐾</h1>

        <div id="petCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#petCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#petCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#petCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.nombresdeperros.eu/wp-content/uploads/2019/07/labradores-color-cafe.jpg"
                        class="d-block w-100" alt="Perro en adopción" style="max-height: 400px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="https://purina.com.gt/sites/default/files/2022-10/purina-brand-gatos-en-adopcion-que-es-mejor-gatitos-bebes-o-gatos-adultos-banner-desktop.png"
                        class="d-block w-100" alt="Gato en adopción" style="max-height: 400px; object-fit: cover;">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#petCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#petCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Nueva Mascota
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Mascota</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('agregar_mascotas');?>" method="post">
                            <label for="txt_id" class="form-label">Identificación del Animal</label>
                            <input type="number" name="txt_id" id="txt_id" class="form-control">
                            <label for="txt_nombre" class="form-label">Nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                            <label for="txt_raza" class="form-label">Raza</label>
                            <input type="text" name="txt_raza" id="txt_raza" class="form-control">
                            <label for="txt_especie" class="form-label">Especie</label>
                            <input type="text" name="txt_especie" id="txt_especie" class="form-control">
                            <label for="txt_vacunas" class="form-label">Tipo de Vacuna</label>
                            <input type="text" name="txt_vacunas" id="txt_vacunas" class="form-control">
                            <label for="txt_esterilizado" class="form-label">Esterilizado</label>
                            <input type="text" name="txt_esterilizado" id="txt_esterilizado" class="form-control">
                            <label for="txt_edad" class="form-label">Edad</label>
                            <input type="number" name="txt_edad" id="txt_edad" class="form-control">
                            <label for="txt_estado" class="form-label">Disponibilidad</label>
                            <input type="text" name="txt_estado" id="txt_estado" class="form-control">
                            <button type="submit" class="form-control btn btn-primary mt-2">Guardar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Id_Animal</th>
                    <th>Nombre</th>
                    <th>Raza</th>
                    <th>Especie</th>
                    <th>Vacunas</th>
                    <th>Esterilizado</th>
                    <th>Edad</th>
                    <th>Estado_disponibilidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php                
                if (isset($datos) && is_array($datos)) {
                    foreach ($datos as $animal){
                    ?>
                <tr>
                    <td> <?=$animal ['id_animal'];?> </td>
                    <td> <?=$animal ['nombre'];?> </td>
                    <td> <?=$animal ['raza'];?> </td>
                    <td> <?=$animal ['especie'];?> </td>
                    <td> <?=$animal ['vacunas'];?> </td>
                    <td> <?=$animal ['esterilizado'];?> </td>
                    <td> <?=$animal ['edad'];?> </td>
                    <td> <?=$animal ['estado_disponibilidad'];?> </td>
                    <td>
                        <a href="<?= base_url('eliminar_mascotas/') . $animal['id_animal']; ?>"
                            class="btn btn-danger btn-sm d-flex align-items-center justify-content-center gap-1"><i
                                class="bi bi-x-circle-fill"></i> Eliminar </a>
                        <div class="mt-1"></div>
                        <a href="<?= base_url('buscar_mascotas/') . $animal['id_animal']; ?>"
                            class="btn btn-warning btn-sm d-flex align-items-center justify-content-center gap-1 text-dark"><i
                                class="bi bi-pencil-fill"></i> Editar </a>
                    </td>
                </tr>
                <?php
                    }
                } else {                    
                    echo '<tr><td colspan="9" class="text-center">No hay datos de mascotas para mostrar.</td></tr>';
                }
                ?>
            </tbody>
        </table>
        <footer class="text-center mt-4 mb-3 text-secondary">
            Refugio de Animales © <?= date('Y'); ?> | Sistema de Gestión de Mascotas
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