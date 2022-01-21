<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondita</title>
    <!-- importar los estilos para la pagina -->
    <link rel="stylesheet" href="../estilos/css/bootstrap.min.css" />
    <link href="../estilos/fontawesome/css/all.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- ruta del server -->
    <?php $url = "http://".$_SERVER['HTTP_HOST']."/fondita/"?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="img-fluid" src="../images/logo.jpg" alt="logo" style="width:50%"></a>
        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link active" href="<?php $url ?>../index.php">Inicio
                <span class="visually-hidden">(current)</span>
            </a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Fondas</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php $url ?>creaFonda.php">Crear</a>
                <a class="dropdown-item" href="<?php $url ?>consultaFonda.php">Consultar</a>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Recetas</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php $url ?>creaReceta.php">Crear</a>
                <a class="dropdown-item" href="<?php $url ?>consultaReceta.php">Consultar</a>
            </div>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container">
    <br>
        <div class="row">