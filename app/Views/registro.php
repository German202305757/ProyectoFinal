<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Registro de Adoptante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card p-4 shadow">
            <h3 class="text-center mb-3">Formulario de Registro</h3>
            <form action="<?= base_url('registro/guardar') ?>" method="post">
                <div class="mb-2">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Apellido</label>
                    <input type="text" name="apellido" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Edad</label>
                    <input type="number" name="edad" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Correo</label>
                    <input type="email" name="correo" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>DPI</label>
                    <input type="text" name="dpi" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Teléfono</label>
                    <input type="text" name="telefono" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Dirección</label>
                    <textarea name="direccion" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Registrarse</button>
            </form>
        </div>
        <footer class="text-center mt-4 mb-3 text-secondary">
            Refugio de Animales © <?= date('Y'); ?> | Sistema de Gestión de Registro
        </footer>
    </div>
</body>

</html>