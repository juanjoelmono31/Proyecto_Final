<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$dbn = 'trabajo_final';

//$conn = mysqli_connect($host, $user, $pass, $dbn);
$conn = new PDO("mysql:host=$host;dbname=$dbn",$user,$pass);

if(mysqli_connect_errno()){
    //echo "Error al conctar a la base de datos";
    $statusConn = false;
}else {
    //echo "Esta conectada";
    $statusConn = true;
}



