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
    <ul>
        <li>
            <a href=""></a>
        </li>
    </ul>

    <form action="../services.php">


        <div class="formularioUsuario">
            <input type="hidden" class="form-control style" name="formulario" value="crear_blog">
            <div class="form-group">
                <label>Titulo blog</label>
                <input type="text" name="titulo_blog" class="form-control style" placeholder="Ingrese el nombre">
            </div>
            <div class="form-group">
                <label>Clasificacion blog</label>
                <textarea name="contenido_blog" class="form-control style" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label>Clasificacion blog</label>
                <input type="text" name="clasificacion_blog" class="form-control style" placeholder="Ingrese el correo electronico">
            </div>
            <div class="form-group">
                <select class="custom-select style" name="id_usuario">
                    <?php
                    include '../conetion.php';
                    $listado = "SELECT * FROM usuario";

                    $x = $conn->prepare($listado);
                    $result = $x->execute();
                    $resultado = $x->fetchAll();

                    //print_r($resultado);
                    foreach ($resultado as $usuario) { ?>
                        <option value="<?php echo ($usuario['id_usuario']) ?>"> <?php echo ($usuario['nombre_usuario']) ?> </option>

                    <?php }

                    ?>
                </select>
            </div>

            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="submit" class="btn btn-secondary btn-success" value="Enviar">Enviar</button>
                <button type="reset" class="btn btn-secondary btn-danger">Borrar</button>
            </div>
        </div>
    </form>
</body>

</html>