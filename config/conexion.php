<?php
$host   = "localhost";
$bd     = "fonda";
$user   = "root";
$pass   = "";

try{
    $conn   = new PDO("mysql:host=$host;dbname=$bd",$user,$pass);
    if(!$conn)
        echo    "error Conexion...";
}catch(Exception $e){
    echo $e->getMessage();
}
?>