<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Editar Usuario</h1>
                <form action="<?=base_url('modificar_usuario')?>" method="post">
                    <label for="" class="form-label">Usuario ID</label>
                    <input type="number" class="form-control" name="txt_codigo" id="txt_codigo" class="form-control"
                        value="<?=$datos['id_usuario'];?>">
                    <label for="txt_usuario" class="form-label">Usuario</label>
                    <input type="text" name="txt_usuario" id="txt_usuario" class="form-control"
                        value="<?=$datos['usuario'];?>">
                    <label for="txt_contrasena" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" name="txt_contrasena" id="txt_contraseña"
                        class="form-control" value="<?=$datos['contraseña'];?>">
                    <label for="txt_rol" class="form-label">Rol</label>
                    <input type="text" class="form-control" name="txt_rol" id="txt_rol" class="form-control"
                        value="<?=$datos['rol'];?>">
                    <label for="txt_id_adoptante" class="form-label">Adoptante ID</label>
                    <input type="number" class="form-control" name="txt_id_adoptante" id="txt_id_adoptante"
                        class="form-control" value="<?=$datos['id_adoptante'];?>">
                    <input type="hidden" name="txt_codigo_original" value="<?= $datos['id_usuario']; ?>">

                    <button type="submit" class="form-control btn btn-info mt-2">Guardar Cambios</button>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>