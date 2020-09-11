<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos/estilos.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Proyecto Final</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./usuario/create.php">Crear Usuarios <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="blog/create.php">Crear Blog <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form action="usuario/serch.php"  class="form-inline my-2 my-lg-0">
                <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0">Buscar</button>
            </form>
        </div>
    </nav>

    <h3 class="titulo">
        Listado de usuarios
    </h3>
 

    <?php
    include 'conetion.php';
    $listado = "SELECT * FROM usuario";

    $x = $conn->prepare($listado);
    $result = $x->execute();
    $resultado = $x->fetchAll();

    //print_r($resultado);
    foreach ($resultado as $usuario) { ?>

        <ul>
            <li>
                id:
                <?php
                echo ($usuario['id_usuario']);

                ?>
            </li>
            <li>
                Nombre de usuario:
                <?php
                echo ($usuario['nombre_usuario']);

                ?>
            </li>
            <li>
                Correo:
                <?php
                echo ($usuario['correo']);

                ?>
            </li>
        </ul>


    <?php }

    ?>


</body>

</html>