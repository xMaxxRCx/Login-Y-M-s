<?php

$servidor = "localhost";
$usuario = "root";
$pass = "";
$BD = "dlyp07";

$connect = mysqli_connect($servidor, $usuario, $pass, $BD);
if($connect -> connect_error){
    die("Error al conectar la base de datos".$connect->connect_error);
}
?>