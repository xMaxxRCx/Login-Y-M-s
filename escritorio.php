<?php
error_reporting(0);
session_start();
// conexion //
include 'include/connect.php';
$usuar = $_SESSION['Nombre'];
if(isset($usuar)){
  header("location:fluido.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script> 
    <title>Escritorio</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Barra</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-danger" type="submit">Buscar</button>
    </form>
  </div>
</nav>
<h4 class="text-center">Hola: <?php echo $usuar; ?></h4>
<div class="container col-6 border shadow p-2">
<img src="img/perro.jpeg" alt="" class="img-thumbnail img-fluid border-0 w-100 h-auto justify-content-center align-items-center">
</div>
</body>
</html>