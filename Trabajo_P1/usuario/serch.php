<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/estilos.css">
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
                    <a class="nav-link" href="create.php">Crear Usuarios <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../">Regresar <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <h3 class="titulo">
        Listado de usuarios 
    </h3>

   
   <?php
        include '../conetion.php';
        $busqueda = $_GET['buscar'];
        $listado = "SELECT * FROM usuario WHERE (nombre_usuario LIKE '%$busqueda%') OR (correo LIKE '%$busqueda%') " ;

        $x = $conn -> prepare($listado);
        $result = $x->execute();
        $resultado = $x->fetchAll();

        //print_r($resultado);
        foreach($resultado as $usuario){ ?>

        <ul>
            <li>
            id:
                <?php
                    echo($usuario['id_usuario']);
                    
                ?>
            </li>
            <li>
            Nombre de usuario:
                <?php
                    echo($usuario['nombre_usuario']);
                    
                ?>
            </li>
            <li>
            Correo:
                <?php
                    echo($usuario['correo']);
                    
                ?>
            </li>
        </ul>

            
        <?php }

    ?>


</body>
</html>
