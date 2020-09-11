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
                    <a class="nav-link" href="../">Regresar <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <h3 class="titulo">
        Crear usuario
    </h3>
    <hr>

    <form action="../services.php">
        <div class="formularioUsuario">
            <div class="form-group">
                <label>Ingrese el nombre</label>
                <input type="text" name="nombre_usuario" class="form-control style" placeholder="Ingrese el nombre">
            </div>
            <div class="form-group">
                <label>Ingrese el correo</label>
                <input type="email" name="correo" class="form-control style" placeholder="Ingrese el correo electronico">
            </div>
            <div class="form-group">
                <label>Ingrese la contraseña</label>
                <input type="password" name="contraseña" class="form-control style" placeholder="Ingrese contraseña">
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="submit" class="btn btn-secondary btn-success" value="Enviar">Enviar</button>
                <button type="reset" class="btn btn-secondary btn-danger">Borrar</button>
            </div>
        </div>
        <input type="hidden" value="crear_usuario" name="formulario">
    </form>

</body>

</html>