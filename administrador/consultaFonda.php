<?php 
    include("../template/encabezado.php");
    include ('../config/conexion.php'); 

    $id = (isset($_GET['fonda']))?$_GET['fonda']:""; //validar si trae un valor en caso contrario coloca vacio
    
    if($id == ""){
        $query  = $conn->prepare("SELECT * FROM fonda;"); // genera el query
        $query->execute(); // ejecuta el query
    }else{
        $query  = $conn->prepare("SELECT * FROM fonda where id=:id;"); // genera el query
        $query->bindParam(':id', $id); // agregar los parametros
        $query->execute(); // ejecuta el query
    }
    // Recupera los registros y los almacena en lista
    $lst    = $query->fetchAll(PDO::FETCH_ASSOC);
    $cont   = 1; //crea contador para extraer la informacion
    foreach($lst as $fonda){ //itera la lista
?>
<div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><?php echo $fonda['nombre'] ?></h4>
            <img class="img-fluid" src="../images/fondas.jpg" alt="fonda">
            <input class="form-control" type="hidden" name="id" id="id_<?php echo $cont ?>" value="<?php echo $fonda['id'] ?>">
            <input class="form-control" type="hidden" name="nombre" id="nombre_<?php echo $cont ?>" value="<?php echo $fonda['nombre'] ?>">
            <input class="form-control" type="hidden" name="calle" id="calle_<?php echo $cont ?>" value="<?php echo $fonda['calle'] ?>">
            <input class="form-control" type="hidden" name="numExt" id="numExt_<?php echo $cont ?>" value="<?php echo $fonda['num_ext'] ?>">
            <input class="form-control" type="hidden" name="numInt" id="numInt_<?php echo $cont ?>" value="<?php echo $fonda['num_int'] ?>">
            <input class="form-control" type="hidden" name="cp" id="cp_<?php echo $cont ?>" value="<?php echo $fonda['cp'] ?>">
            <input class="form-control" type="hidden" name="colonia" id="colonia_<?php echo $cont ?>" value="<?php echo $fonda['colonia'] ?>">
            <input class="form-control" type="hidden" name="municipio" id="municipio_<?php echo $cont ?>" value="<?php echo $fonda['municipio'] ?>">
            <input class="form-control" type="hidden" name="estado" id="estado_<?php echo $cont ?>" value="<?php echo $fonda['estado'] ?>">
            <input class="form-control" type="hidden" name="ciudad" id="ciudad_<?php echo $cont ?>" value="<?php echo $fonda['ciudad'] ?>">
            <input class="form-control" type="hidden" name="pais" id="pais_<?php echo $cont ?>" value="<?php echo $fonda['Pais'] ?>">
            <input type="button" class="btn btn-link" onclick="verInfo(<?php echo $cont ?>,1)" value="Ver mas...">
        </div>
    </div>
    <br>
</div>

<?php 
        $cont    = $cont+1;
    }
    include("../template/pie.php"); 
?>

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
                        <input class="form-control" type="hidden" name="idF" id="idF" readonly="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Numero Exterior: </label>
                    <label  class="col-sm-2 col-form-label" id="numExt"></label>    
                    <label class="col-sm-2 col-form-label">Numero Interior: </label>
                    <label  class="col-sm-2 col-form-label" id="numInt"></label> 
                    <label class="col-sm-2 col-form-label">Codigo Postal: </label>
                    <label  class="col-sm-2 col-form-label" id="cp"></label>               
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Colonia: </label>
                    <label  class="col-sm-3 col-form-label" id="colonia"></label> 
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Municipio: </label>
                    <label  class="col-sm-6 col-form-label" id="municipio"></label> 
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Estado: </label>
                    <label  class="col-sm-6 col-form-label" id="estado"></label> 
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Ciudad: </label>
                    <label  class="col-sm-6 col-form-label" id="ciudad"></label> 
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">País: </label>
                    <label  class="col-sm-6 col-form-label" id="pais"></label> 
                </div>
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="muestra">Registrar Receta</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

