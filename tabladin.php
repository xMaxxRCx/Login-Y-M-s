<?php
include 'include/connect.php';
// consulta // 
$consul = "SELECT * FROM usuarios";
$eject = $connect->query($consul);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Dinamica | Primera Vr</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12"></div>
        <h2 class="text-center">Tabla Dinamica</h2>
    </div> 
    <table name="table" class="table">
        <thead class="text-muted">
        <th class="text-center">Nombre</th>
        <th class="text-center">ApellidoP</th>
        <th class="text-center">ApellidoM</th>
        <th class="text-center">Email</th>
        <th class="text-center">Nick</th>
        <th class="text-center">Password</th>
        <th class="text-center">Opciones</th>
        </thead>
        <tbody>
            <?php
            while($row = $eject->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['Nombre']; ?></td>
                <td><?php echo $row['ApellidoP']; ?></td>
                <td><?php echo $row['ApellidoM']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Nick']; ?></td>
                <td><?php echo $row['Password']; ?></td>
                <td><a href="#">Editar</a> - <a href="eliminar.php?Id_Usuario=<?php echo $row['Id_Usuario'];?>">Borrar</a></td>

            </tr>
            <?php } 
            ?>
        </tbody>
    </table>
</body>
</html>