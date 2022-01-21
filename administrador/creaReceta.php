<?php  
    //incluir conexion
    include("../template/encabezado.php");
    include ('../config/conexion.php');
    // recibe el valor por medio de GET
    $id = (isset($_GET['fonda']))?$_GET['fonda']:""; //validar si trae un valor en caso contrario coloca vacio
    
    if($id == ""){
        $query  = $conn->prepare("SELECT * FROM fonda;");
        $query->execute(); // ejecuta el query
        $lstFonda    = $query->fetchAll(PDO::FETCH_ASSOC); // Recupera los registros y los guarda en una lista 
    }else{
        $query  = $conn->prepare("SELECT * FROM fonda where id=:id;");
        $query->bindParam(':id', $id); // agregar los parametros
        $query->execute(); // ejecuta el query
        $lstFonda    = $query->fetchAll(PDO::FETCH_ASSOC); // Recupera los registros y los guarda en una lista 
    }
?>

<div class="card border-success mb-3" >
  <div class="card-header"><h5>Crea tu Menú...</h5></div>
  <div class="card-body">
    <h6 class="card-title">Crea el menú para tu Fonda</h6>
    <form id="formularioMenu" method="POST" action=""> 
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-sm-10 col-md-10 col-lg-10" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Nombre de la fonda</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-store-alt"></i></span>
                        <select name="nombreFonda" class="form-select" id="inputGroupSelect01">
                            <?php   if($id == ""){  // valida si el id viene vacio?>
                                <option value="0" selected>Selecciona Fonda</option>
                            <?php   }    
                                foreach($lstFonda as $fonda){ // Itera la lista
                            ?>
                            <option value="<?php echo $fonda['id'] ?>"><?php echo $fonda['nombre'] ?></option> <!--muestra los valores de la lista -->
                            <?php } ?>
                        </select>
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-sm-10 col-md-10 col-lg-10" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Nombre del Platillo</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-store-alt"></i></span>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-sm-10 col-md-10 col-lg-10" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Descripción</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-mortar-pestle"></i></span>
                        <textarea name="descri" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-sm-10 col-md-10 col-lg-10" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Ingredientes</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fab fa-leanpub"></i></span>
                        <textarea name="ingre" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-sm-10 col-md-10 col-lg-10" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Costos</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-money-bill-alt"></i></span>
                        <input type="text" name="costo" class="form-control costo" placeholder="Costo" aria-label="Costo" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-md-3 col-lg-3">
                <button type="button" id="btnGuardarMenu" class="btn btn-success"><i class="far fa-save"></i> Guardar</button>
                <button type="button" class="btn btn-danger cancela"><i class="far fa-trash-alt"></i>  Cancelar</button>  
            </div>
        </div>
    </div>
</form>
  </div>
</div>

<?php include("../template/pie.php") ?>