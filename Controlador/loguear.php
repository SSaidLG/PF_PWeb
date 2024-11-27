<?php
session_start();
require '../Modelo/conexion.php';

$id_empleado = $_POST['id_empleado'];
$password = $_POST['password'];


//La función COUNT devuelve el número de filas de la consulta, es decir, el número de registros que cumplen una determinada condición.

//Los valores nulos no serán contabilizados
$q = "SELECT COUNT(*) as contar from usuario where id_empleado= '$id_empleado' and password = '$password'";

$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {

    // en la variable session se guarda el id del empleado esto para poder acarrearla
    $_SESSION['id_empleado'] = $id_empleado;    
    header("location: ../Vista/Principal.php");
    //header("location: ../inicio.php");
    exit;
} else {

    header("location: ../Vista/login/indexError.php");
    exit;
}
?>