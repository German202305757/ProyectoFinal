<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

    <div class="container py-4">
        <div class="text-center mb-4">
            <h1 class="fw-bold text-primary">Gestión de Usuarios</h1>
            <p class="text-secondary">Administra los usuarios registrados en nuestro sistema</p>
        </div>

        <div id="carouselExample" class="carousel slide mb-5">
            <?php if (isset($error) && $error): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i> <?= $error ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

            <?php if (isset($success) && $success): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill"></i> <?= $success ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

            <div class="carousel-inner rounded shadow-sm">
                <div class="carousel-item active">
                    <img src="https://www.4webs.es/blog/wp-content/uploads/2016/10/usuarios-nuevos-vs-recurrentes.jpg"
                        class="d-block w-100 img-fluid" alt="Usuarios">
                </div>
                <div class="carousel-item">
                    <img src="https://inscripcion.online/UserFiles/admin/modulo_blog/images/52.jpg"
                        class="d-block w-100 img-fluid" alt="Personas">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregar">
                <i class="bi bi-person-plus"></i> Agregar Usuario
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Rol</th>
                        <th>ID Adoptante</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $usuario): ?>
                    <tr>
                        <td><?= $usuario['id_usuario']; ?></td>
                        <td><?= $usuario['usuario']; ?></td>
                        <td><?= $usuario['contraseña']; ?></td>
                        <td><?= $usuario['rol']; ?></td>
                        <td><?= $usuario['id_adoptante']; ?></td>
                        <td>
                            <a href="<?= base_url('eliminar_usuario/' . $usuario['id_usuario']); ?>"
                                class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </a>
                            <a href="<?= base_url('buscar_usuario/' . $usuario['id_usuario']); ?>"
                                class="btn btn-info btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalAgregarLabel">
                        <i class="bi bi-person-plus"></i> Agregar Usuario
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Cerrar"></button>
                </div>
                <form action="<?= base_url('agregar_usuario'); ?>" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="txt_codigo" class="form-label">ID del Usuario</label>
                            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txt_usuario" class="form-label">Usuario</label>
                            <input type="text" name="txt_usuario" id="txt_usuario" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txt_contrasena" class="form-label">Contraseña</label>
                            <input type="text" name="txt_contrasena" id="txt_contrasena" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txt_rol" class="form-label">Rol</label>
                            <input type="text" name="txt_rol" id="txt_rol" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txt_id_adoptante" class="form-label">ID de Adoptante</label>
                            <input type="number" name="txt_id_adoptante" id="txt_id_adoptante" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Guardar
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer class="text-center mt-4 mb-3 text-secondary">
    Refugio de Animales © <?= date('Y'); ?> | Sistema de Gestión de Usuarios
</footer>

</html>