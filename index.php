<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondita</title>
    <!-- importar los estilos para la pagina -->
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css" />
    <link href="estilos/fontawesome/css/all.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a href="#">
        <img class="img-fluid" src="images/logo.jpg" alt="logo" style="width:50%">
        </a>
        

        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link active" href="index.php">Inicio
                <span class="visually-hidden">(current)</span>
            </a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Fondas</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="administrador/creaFonda.php">Crear</a>
                <a class="dropdown-item" href="administrador/consultaFonda.php">Consultar</a>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Recetas</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="administrador/creaReceta.php">Crear</a>
                <a class="dropdown-item" href="administrador/consultaReceta.php">Consultar</a>
            </div>
            </li>
        </ul>
        </div>
    </div>
    </nav><br>
    <div class="container">
        <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Bienvenido!</h4>
            <p class="mb-0">Bienvenido al registro de Fondas y Recetas.</p>
        </div>
    </div>
    </div>
    </div>
    <!-- importar los estilos para los efectos y animaciones de la pagina -->
    <script src="estilos/jquery/bootstrap.min.js"></script>
    <script defer src="estilos/fontawesome/js/all.js"></script>
</body>
</html>
        