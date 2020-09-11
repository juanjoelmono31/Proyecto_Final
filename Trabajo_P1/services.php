<?php
include 'conetion.php';

if($_GET){
    switch($_GET['formulario']){
        case "crear_usuario":
            $nombre = $_GET['nombre_usuario'];
            $correo = $_GET['correo'];
            $contraseña = $_GET['contraseña'];

            $sql = "INSERT INTO usuario ( id_usuario, nombre_usuario, correo, contraseña) 
                    VALUES ( :id_usuario, :nombre_usuario, :correo, :contrasena)";
            $q = $conn->prepare($sql);
            $result = $q->execute(array(
                ':id_usuario'=>NULL,
                ':nombre_usuario'=>$nombre,
                ':correo'=>$correo,
                ':contrasena'=>$contraseña));

        break;
        case "crear_blog":
            $titulo_blog = $_GET['titulo_blog'];
            $id_usuario = $_GET['id_usuario'];
            $contenido_blog = $_GET['contenido_blog'];
            $clasificacion_blog = $_GET['clasificacion_blog'];

            $sql = "INSERT INTO blog (id_blog, id_usuario, titulo_blog, contenido_blog, clasificacion_blog) 
                    VALUES (:id_blog, :id_usuario, :titulo_blog, :contenido_blog, :clasificacion_blog)";
            $q = $conn->prepare($sql);
            $result = $q->execute(array(
                ':id_blog'=>NULL,
                ':id_usuario'=>$id_usuario,
                ':titulo_blog'=>$titulo_blog,
                ':contenido_blog'=>$contenido_blog,
                ':clasificacion_blog'=>$clasificacion_blog));
        break;
            
    }
    echo "<script> window.location.replace('index.php') </script>";
}