<?php
include 'include/connect.php';
$Idd = $_GET['Id_Usuario'];
$elimin = "DELETE FROM usuarios WHERE Id_Usuario= '$Idd'";
$elimin = $connect->query($elimin);
header("location:tabladin.php");
$connect->close();
?>