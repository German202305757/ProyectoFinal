<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nueva Solicitud de Adopción</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        xintegrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="bg-light">


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">

                <h1 class="fw-bold text-primary mb-4">
                    <i class="bi bi-file-earmark-text-fill me-2"></i>
                    Nueva Solicitud de Adopción
                </h1>

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 p-md-5">


                        <form action="<?= base_url('agregar_solicitud_cliente'); ?>" method="post">

                            <div class="row g-3">

                                <div class="col-md-6 form-floating">
                                    <input type="number" class="form-control" id="txt_id_adoptante"
                                        name="txt_id_adoptante" placeholder="No. de adoptante" required
                                        value="<?= session()->get('adoptante') ?>" readonly>
                                    <label for="txt_id_adoptante" class="ms-2">No. de Adoptante</label>
                                    <small class="form-text text-muted ms-2">ID del usuario que realiza la
                                        solicitud.</small>
                                </div>

                                <div class="col-md-6 form-floating">
                                    <input type="text" class="form-control" id="txt__id_animal" name="txt__id_animal"
                                        placeholder="No. de mascota" required value="<?=$datos['id_animal'];?>"
                                        readonly>
                                    <label for="txt__id_animal" class="ms-2">No. de Mascota</label>
                                    <small class="form-text text-muted ms-2">ID de la mascota a adoptar.</small>
                                </div>
                                <input type="hidden" id="txt_estado" name="txt_estado" value="Pendiente">
                                <div class="col-md-6 form-floating">
                                    <input type="date" class="form-control" id="txt_fecha" name="txt_fecha"
                                        placeholder="Fecha" required value="<?php echo date("Y-m-d"); ?>">
                                    <label for="txt_fecha">Fecha de Solicitud</label>
                                </div>

                                <div class="col-12 form-floating">
                                    <input type="email" class="form-control" id="txt_correo" name="txt_correo"
                                        placeholder="Correo del Solicitante" required>
                                    <label for="txt_correo">Correo del Solicitante</label>
                                </div>

                                <div class="col-12 form-floating">
                                    <textarea class="form-control" id="txt_comentario" name="txt_comentario"
                                        placeholder="Comentario adicional" style="height: 120px"></textarea>
                                    <label for="txt_comentario">Indique la razón de la adopción y el espacio disponible
                                        para la mascota</label>
                                </div>

                            </div>

                            <div class="mt-4 pt-3 border-top d-flex justify-content-end">
                                <a href="<?= base_url('solicitudes') ?>" class="btn btn-outline-secondary me-2">
                                    <i class="bi bi-x-circle me-1"></i>
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-circle me-1"></i>
                                    Guardar Solicitud
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        xintegrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
<footer class="text-center mt-4 mb-3 text-secondary">
    Refugio de Animales © <?= date('Y'); ?> | Sistema de Gestión de Solicitud Cliente
</footer>

</html>