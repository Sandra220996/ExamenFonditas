<?php
    // recibe los valores del formulario
    $idFonda   = $_POST['nombreFonda'];
    $nombre = $_POST['nombre'];
    $descri = $_POST['descri'];
    $ingre  = $_POST['ingre'];
    $costo  = $_POST['costo'];

    include ('../config/conexion.php'); // incluir la conexion a la base 
    $sentencia  = $conn->prepare("INSERT INTO menu (nombre, descripcion, ingredientes, costo, id_fonda) 
                                    VALUES (:nombre, :descri, :ingre, :costo, :idFonda);");
    //agrgar los parametros para el query INSERt
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':descri', $descri);
    $sentencia->bindParam(':ingre', $ingre);
    $sentencia->bindParam(':costo', $costo);
    $sentencia->bindParam(':idFonda', $idFonda);
    echo $sentencia->execute(); //ejecucion de la funcion sql retorna 0 si ocurrio error o 1 en caso de se satisfactorio
 

?>