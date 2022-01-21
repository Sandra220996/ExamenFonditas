<?php 
    // incluir la conexion y los estilos de la pagina
    include("../template/encabezado.php");
    include ('../config/conexion.php');

    $queryMenu  = $conn->prepare("SELECT * FROM menu;");
    $queryMenu->execute(); // ejecuta el query
    $lstReceta    = $queryMenu->fetchAll(PDO::FETCH_ASSOC); // Recupera los registros y los guarda en una lista

    $queryFonda  = $conn->prepare("SELECT * FROM fonda;");
    $queryFonda->execute(); // ejecuta el query
    $lstFonda    = $queryFonda->fetchAll(PDO::FETCH_ASSOC); // Recupera los registros y los guarda en una lista

    $cont   = 1; //crea contador para extraer la informacion
?>

<div class="col-sm-12 col-md-12 col-lg-12">
    <legend></legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Consulta Receta por Fonda</label>
      <div class="col-sm-10">
            <select name="nombreFonda" class="form-select" id="typeFonda">
                <option value="" selected>Selecciona Fonda</option>
                <?php     
                    foreach($lstFonda as $fonda){ // Itera la lista
                ?>
                <option value="<?php echo $fonda['id'] ?>"><?php echo $fonda['nombre'] ?></option>
                <?php } ?>
            </select>
      </div>
    </div>
    <br>
</div>

<div id="filtro" class="row">
    <?php     
        foreach($lstReceta as $receta){ // Itera la lista
    ?>
    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $receta['nombre'] ?></h4> <!-- muestra los valores de la lista -->
                <img class="img-fluid" src="../images/fondas.jpg" alt="menu">
                <input class="form-control" type="hidden" name="id" id="id_<?php echo $cont ?>" value="<?php echo $receta['id'] ?>">
                <input class="form-control" type="hidden" name="nombre" id="nombre_<?php echo $cont ?>" value="<?php echo $receta['nombre'] ?>">
                <input class="form-control" type="hidden" name="desc" id="desc_<?php echo $cont ?>" value="<?php echo $receta['descripcion'] ?>">
                <input class="form-control" type="hidden" name="ingr" id="ingr_<?php echo $cont ?>" value="<?php echo $receta['ingredientes'] ?>">
                <input class="form-control" type="hidden" name="costo" id="costo_<?php echo $cont ?>" value="<?php echo $receta['costo'] ?>">
                <input class="form-control" type="hidden" name="idFonda" id="idFonda_<?php echo $cont ?>" value="<?php echo $receta['id_fonda'] ?>">
                <?php   if($receta['id_fonda'] != '0' || $receta['id_fonda'] != ""){  ?>
                    <input type="button" class="btn btn-link" onclick="verInfo(<?php echo $cont ?>,2)" value="Ver mas...">
                <?php   }   ?>
            </div>
        </div>
        <br>
    </div>

    <?php 
        $cont   = $cont+1;
    }
        include("../template/pie.php"); 
    ?>
</div>

<div class="modal">
  <div class="modal-dialog modal-lg" role="document" data-keyboard="false" data-backdrop="static">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="nombre"></h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card bg-light mb-12" style="max-width: 50rem;">
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input class="form-control" type="hidden" name="id" id="id" readonly="">
                        <input class="form-control" type="hidden" name="idF" id="idF" readonly="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Descripción: </label>
                    <label  class="col-sm-10 col-form-label" id="desc"></label>           
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ingredientes: </label>
                    <label  class="col-sm-10 col-form-label" id="ingr"></label> 
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Costo $: </label>
                    <label  class="col-sm-10 col-form-label" id="costo"></label> 
                </div>
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="muestra">Consultar Fonda</button>
      </div>
    </div>
  </div>
</div>