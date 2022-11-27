<?php
include "connect.php";
session_start();
if(isset($Usuario))>{
    header("location../index.php");

}
$Usuario = "SELECT * FROM usuarios WHERE id_usuario = $Usuario['id_usuario]";
$Usuarios = "$connect.php ->query($Usuario)";
$Dusuario = $Usuarios -> fetch_array();