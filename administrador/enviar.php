<?php
    // recibe los valores del formulario
    $nombre     = $_POST['nombre'];
    $calle      = $_POST['calle'];
    $numExt     = $_POST['numExt'];
    $numInt     = $_POST['numInt'];
    $cp         = $_POST['cp'];
    $colonia    = $_POST['colonia'];
    $municipio  = $_POST['municipio'];
    $estado     = $_POST['estado'];
    $ciudad     = $_POST['ciudad'];
    $pais       = $_POST['pais'];

    //incluye la conexion
    include ('../config/conexion.php');
    // genera la sentencia SQL  
    $sentencia  = $conn->prepare("INSERT INTO fonda (nombre, calle, num_ext, num_int, cp, colonia, municipio, estado, ciudad, Pais) 
                                    VALUES (:nombre, :calle, :numExt, :numInt, :cp, :colonia, :municipio, :edo, :cd, :pais);");
    //agrgar los parametros para el query INSERT
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':calle', $calle);
    $sentencia->bindParam(':numExt', $numExt);
    $sentencia->bindParam(':numInt', $numInt);
    $sentencia->bindParam(':cp', $cp);
    $sentencia->bindParam(':colonia', $colonia);
    $sentencia->bindParam(':municipio', $municipio);
    $sentencia->bindParam(':edo', $estado);
    $sentencia->bindParam(':cd', $ciudad);
    $sentencia->bindParam(':pais', $pais);
    //ejecucion de la funcion sql retorna 0 si ocurrio error o 1 en caso de de satisfactorio
    echo $sentencia->execute();
 

?>