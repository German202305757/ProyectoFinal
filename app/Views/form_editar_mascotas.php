<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Mascotas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Editar Mascotas</h1>
                <form action="<?=base_url('modificar_mascotas')?>" method="post">
                    <label for="txt_id" class="form-label">Identificación del Animal</label>
                    <input type="text" name="txt_id" id="txt_id" class="form-control" 
                    value="<?=$datos['id_animal'];?>" readonly>
                    <label for="txt_nombre" class="form-label">Nombre</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" 
                    value="<?=$datos['nombre'];?>">                                    
                    <label for="txt_raza" class="form-label">Raza</label>
                    <input type="text" name="txt_raza" id="txt_raza" class="form-control" 
                    value="<?=$datos['raza'];?>">
                    <label for="txt_especie" class="form-label">Especie</label>
                    <input type="text" name="txt_especie" id="txt_especie" class="form-control" 
                    value="<?=$datos['especie'];?>">
                    <label for="txt_vacunas" class="form-label">Vacunas</label>
                    <input type="text" name="txt_vacunas" id="txt_vacunas" class="form-control" 
                    value="<?=$datos['vacunas'];?>">
                    <label for="txt_esterilizado" class="form-label">Esterilizado</label>
                    <input type="text" name="txt_esterilizado" id="txt_esterilizado" class="form-control" 
                    value="<?=$datos['esterilizado'];?>">
                    <label for="txt_edad" class="form-label">Edad</label>
                    <input type="number" name="txt_edad" id="txt_edad" class="form-control" 
                    value="<?=$datos['especie'];?>">
                    <label for="txt_estado" class="form-label">Disponibilidad</label>
                    <input type="text" name="txt_estado" id="txt_estado" class="form-control" 
                    value="<?=$datos['estado_disponibilidad'];?>">
                    <button type="submit" class="form-control btn btn-primary mt-2">Guardar Cambios</button>

                </form>
            </div>
        </div>   
    </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>