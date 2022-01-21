<?php include("../template/encabezado.php") ?>

<div class="card border-success mb-3" >
  <div class="card-header"><h5>Crea tu Fonda...</h5></div>
  <div class="card-body">
    <h6 class="card-title">Dar de alta tu fonda es lo mas sencillo solo necesitas llenar el formulario</h6  >
    <form id="formularioFonda" method="POST" action="">    
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-sm-10 col-md-10 col-lg-10" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Nombre de la fonda</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-store-alt"></i></span>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-sm-10 col-md-10 col-lg-10" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Calle de la fonda</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-americas"></i></span>
                        <input type="text" name="calle" id="calle" class="form-control" placeholder="Calle" aria-label="Calle" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-sm-10 col-md-3 col-lg-3" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Número Exterior</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-americas"></i></span>
                        <input type="text" name="numExt" id="numExt" class="form-control" placeholder="Número Exterior" aria-label="Numero" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
            <div class="col-sm-10 col-md-3 col-lg-3" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Número Interior</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-americas"></i></span>
                        <input type="text" name="numInt" id="numInt" class="form-control" placeholder="Número Interior" aria-label="numero" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
            <div class="col-sm-10 col-md-4 col-lg-4" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Código Postal</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-americas"></i></span>
                        <input type="text" name="cp" id="cp" class="form-control" placeholder="Código Postal" aria-label="Codifo" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-sm-10 col-md-10 col-lg-10" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Colonia</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-americas"></i></span>
                        <input type="text" name="colonia" id="colonia" class="form-control" placeholder="Colonia" aria-label="Colonia" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-sm-10 col-md-10 col-lg-10" style="align:center">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Municipio y/o delegación</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-americas"></i></span>
                        <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Municipio y/o delegación" aria-label="municipio" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-sm-10 col-md-3 col-lg-3">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Estado</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-americas"></i></span>
                        <input type="text" name="estado" id="estado" class="form-control" placeholder="Estado" aria-label="Estado" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
            <div class="col-sm-10 col-md-4 col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Ciudad</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-americas"></i></span>
                        <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Ciudad" aria-label="Ciudad" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
            <div class="col-sm-10 col-md-3 col-lg-3">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">País</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-americas"></i></span>
                        <input type="text" name="pais" id="pais" class="form-control" placeholder="Pais" aria-label="Pais" aria-describedby="basic-addon1">
                    </div>
                </div>    
            </div>
            <div class="col-sm-10 col-md-3 col-lg-3">
            <button type="button" id="btnGuardar" class="btn btn-success"><i class="far fa-save"></i> Guardar</button>
            <button type="button" class="btn btn-danger cancela"><i class="far fa-trash-alt"></i>  Cancelar</button>  
            </div>
            
        </div>
    </form>
  </div>
</div>

<?php include("../template/pie.php") ?>