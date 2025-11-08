<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoptantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">
    <div class="container py-4">
        <div class="text-center mb-4">
            <h1 class="fw-bold text-primary">Gestión de Adoptantes</h1>
            <p class="text-secondary">Administra los adoptante registrados en nuestro sistema</p>
        </div>

        <div class="container mt-4">

            <div id="carouselExample" class="carousel slide mb-4">
                <div class="carousel-inner rounded shadow-sm">
                    <div class="carousel-item active">
                        <img src="https://purina.com.gt/sites/default/files/2022-10/mascotas-en-adopcion-beneficios-y-requisitos-para-adoptar-un-perro-o-gato.png"
                            class="d-block w-100" alt="Adoptantes 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQGoTZ2GQfzfSS8nj00TbegiFMXsGRFlGozpL-5P0X5tdKJZUT9FBQJw3CbCnzNUBI57Y&usqp=CAU"
                            class="d-block w-100" alt="Adoptantes 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>

            <div class="text-center mb-3">
                <?php if(session()->getFlashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <i class="bi bi-check-circle-fill"></i>
                    <?= session()->getFlashdata('success'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
                <?php endif; ?>

                <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <?= session()->getFlashdata('error'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
                <?php endif; ?>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregar">
                    <i class="bi bi-person-plus-fill"></i> Agregar Adoptante
                </button>
            </div>

            <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h1 class="modal-title fs-5" id="modalAgregarLabel"><i class="bi bi-person-plus"></i> Nuevo
                                Adoptante</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('agregar_adoptante'); ?>" method="post">
                                <div class="mb-2">
                                    <label for="txt_codigo" class="form-label">ID del Adoptante</label>
                                    <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="txt_nombre" class="form-label">Nombre</label>
                                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="txt_apellido" class="form-label">Apellido</label>
                                    <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="txt_edad" class="form-label">Edad</label>
                                    <input type="number" name="txt_edad" id="txt_edad" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="txt_dpi" class="form-label">DPI</label>
                                    <input type="number" name="txt_dpi" id="txt_dpi" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="txt_telefono" class="form-label">Teléfono</label>
                                    <input type="number" name="txt_telefono" id="txt_telefono" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="txt_email" class="form-label">Correo</label>
                                    <input type="email" name="txt_email" id="txt_email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="txt_direccion" class="form-label">Dirección</label>
                                    <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mt-2">
                                    <i class="bi bi-save"></i> Guardar Adoptante
                                </button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle"></i> Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive mt-4">
                <table class="table table-striped table-hover text-center align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>DPI</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Dirección</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $adoptante): ?>
                        <tr>
                            <td><?= $adoptante['id_adoptante']; ?></td>
                            <td><?= $adoptante['nombre']; ?></td>
                            <td><?= $adoptante['apellido']; ?></td>
                            <td><?= $adoptante['edad']; ?></td>
                            <td><?= $adoptante['dpi']; ?></td>
                            <td><?= $adoptante['telefono']; ?></td>
                            <td><?= $adoptante['correo']; ?></td>
                            <td><?= $adoptante['direccion']; ?></td>
                            <td>
                                <a href="<?= base_url('eliminar_adoptante/'.$adoptante['id_adoptante']); ?>"
                                    class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Eliminar
                                </a>
                                <a href="<?= base_url('buscar_adoptante/'.$adoptante['id_adoptante']); ?>"
                                    class="btn btn-info btn-sm">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <footer class="text-center mt-4 mb-3 text-secondary">
                Refugio de Animales © <?= date('Y'); ?> | Sistema de Gestión de Adoptantes
            </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
</body>

</html>