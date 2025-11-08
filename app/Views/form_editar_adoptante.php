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
                <h1>Editar Adoptante</h1>
                <form action="<?=base_url('modificar_adoptante')?>" method="post">
                    <label for="" class="form-label">Adoptante ID</label>
                    <input type="number" class="form-control" name="txt_codigo" id="txt_codigo" class="form-control"
                        value="<?=$datos['id_adoptante'];?>">
                    <label for="txt_nombre" class="form-label">Nombre</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"
                        value="<?=$datos['nombre'];?>">
                    <label for="txt_apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="txt_apellido" id="txt_apellido" class="form-control"
                        value="<?=$datos['apellido'];?>">
                    <label for="txt_edad" class="form-label">Edad</label>
                    <input type="number" class="form-control" name="txt_edad" id="txt_edad"
                        class="form-control" value="<?=$datos['edad'];?>">
                    <label for="txt_email" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="txt_email" id="txt_email"
                        class="form-control" value="<?=$datos['correo'];?>">
                    <label for="txt_dpi" class="form-label">DPI</label>
                    <input type="number" class="form-control" name="txt_dpi" id="txt_dpi" class="form-control"
                        value="<?=$datos['dpi'];?>">
                    <label for="txt_telefono" class="form-label">Telefono</label>
                    <input type="number" class="form-control" name="txt_telefono" id="txt_telefono"
                        class="form-control" value="<?=$datos['telefono'];?>">
                    <label for="txt_direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="txt_direccion" id="txt_direccion"
                        class="form-control" value="<?=$datos['correo'];?>">
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