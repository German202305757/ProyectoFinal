<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Solicitud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Editar Solicitud</h1>
                <form action="<?=base_url('modificar_solicitud')?>" method="post">
                    <label for="txt_id_solicitud" class="form-label">No. de Solicitud</label>
                    <input type="text" name="txt_id_solicitud" id="txt_ctxt_id_solicitudodigo" class="form-control" 
                    value="<?=$datos['id_solicitud'];?>" readonly>

                    <label for="txt_id_adoptante" class="form-label">No. de Adoptante</label>
                    <input type="text" name="txt_id_adoptante" id="txt_id_adoptante" class="form-control" 
                    value="<?=$datos['id_adoptante'];?>" readonly>

                    <label for="txt__id_animal" class="form-label">No. de Mascota</label>
                    <input type="text" name="txt__id_animal" id="txt__id_animal" class="form-control" 
                    value="<?=$datos['id_animal'];?>" readonly>

                    <label for="txt_estado" class="form-label">Estado de la solicitud</label>
                    <input type="number" name="txt_estado" id="txt_estado" class="form-control" 
                    value="<?=$datos['estado_solicitud'];?>">

                    <label for="txt_fecha" class="form-label">Fecha de solicitud</label>
                    <input type="text" name="txt_fecha" id="txt_fecha" class="form-control" 
                    value="<?=$datos['fecha_solicitud'];?>">

                    <label for="txt_comentario" class="form-label">Comentario</label>
                    <input type="text" name="txt_comentario" id="txt_comentario" class="form-control" 
                    value="<?=$datos['comentario'];?>">

                    
                    <button type="submit" class="form-control btn btn-primary mt-2">Guardar Cambios</button>
                </form>
            </div>
        </div>   
    </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>