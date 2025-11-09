<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Citas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Editar Citas</h1>
                <form action="<?=base_url('modificar_citas')?>" method="post">
                    <label for="txt_cita" class="form-label">Identificación de la Cita</label>
                    <input type="text" name="txt_cita" id="txt_cita" class="form-control"
                        value="<?=$datos['id_cita'];?>" readonly>
                    <label for="txt_solicitud" class="form-label">Identificación de solicitud</label>
                    <input type="text" name="txt_solicitud" id="txt_solicitud" class="form-control"
                        value="<?=$datos['id_solicitud'];?>">
                    <label for="txt_fecha" class="form-label">Fecha de la Cita</label>
                    <input type="date" name="txt_fecha" id="txt_fecha" class="form-control"
                        value="<?=$datos['fecha_cita'];?>">
                    <label for="txt_hora" class="form-label">Hora de la Cita</label>
                    <input type="text" name="txt_hora" id="txt_hora" class="form-control"
                        value="<?=$datos['hora_cita'];?>">
                    <label for="txt_tipo" class="form-label">Tipo de Cita</label>
                    <input type="text" name="txt_tipo" id="txt_tipo" class="form-control"
                        value="<?=$datos['tipo_cita'];?>">
                    <label for="txt_comentario" class="form-label">Comentario</label>
                    <input type="text" name="txt_comentario" id="txt_comentario" class="form-control"
                        value="<?=$datos['comentario'];?>">
                    <button type="submit" class="form-control btn btn-primary mt-2">Guardar Cambios</button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>