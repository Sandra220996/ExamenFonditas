<?php
    $idFonda   = (isset($_POST['id']))?$_POST['id']:"";

    include ('../config/conexion.php');
    if($idFonda == ""){
    //echo "SELECT * FROM menu where id_fonda = $idFonda;";
        $query  = $conn->prepare("SELECT * FROM menu;");
        $query->execute(); // ejecuta el query
    } else{
        $query  = $conn->prepare("SELECT * FROM menu where id_fonda = :idFonda;");
        $query->bindParam(':idFonda', $idFonda);
    }
    $query->execute(); // ejecuta el query
    $lst    = $query->fetchAll(PDO::FETCH_ASSOC); // Recupera los registros y los guarda en una lista
   
    foreach($lst as $receta){ // Itera la lista
?>
    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $receta['nombre'] ?></h4>
                <img class="img-fluid" src="../images/fondas.jpg" alt="menu">
                <a href="#" class="card-link">Ver más...</a>
            </div>
        </div>
        <br>
    </div>

<?php 
    }
?>
