<?php
$host_db="127.0.0.1:3306";
$user_db="root";
$pass_db="01062004";
$db_name="veterinaria";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
} 
?>