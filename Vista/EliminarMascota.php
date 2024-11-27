<?php
session_start(); // Iniciar la sesión

// Verificar si la sesión contiene el ID del empleado
if (!isset($_SESSION['id_empleado'])) {
    // Redirigir al login si no hay sesión activa
    header("location: ./login/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Mascota</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="starter-template/css/style.css">
    <link rel="shortcut icon" href="../Media/favicon.png" type="image/x-icon">

</head>

<body class="grey lighten-4">

    <?php include('header.php'); ?>

    <div class="container">
        <div class="card-panel teal lighten-4">
            <h4 class="center teal-text text-darken-3">Eliminar Mascota</h4>
        </div>

        <form method="POST" action="../Controlador/deleteMascota.php" class="card-panel">
            <div class="input-field">
                <input id="id_mascota" type="text" name="id_mascota" required placeholder="Número de la Mascota">
                <label for="id_mascota">ID de la Mascota</label>
            </div>
            
            <button type="submit" class="btn teal darken-2 waves-effect waves-light">Eliminar Mascota</button>
        </form>

        <div class="center">
            <a href="./Principal.php" class="btn-small teal lighten-1 waves-effect waves-light">Ver Mascotas</a>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>