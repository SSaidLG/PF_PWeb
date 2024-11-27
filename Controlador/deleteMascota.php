<?php
require "../Modelo/conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado =$_POST['id_mascota'];
$consulta="DELETE FROM mascota WHERE id_mascota = ";

mysqli_query($conexion, $consulta . $registroEliminado);
mysqli_close($conexion);
header('Location: ../Vista/EliminarMascota.php');
?>