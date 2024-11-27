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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="starter-template/css/style.css">
    <link rel="shortcut icon" href="../Media/favicon.png" type="image/x-icon">

    <title>Registrar Mascota</title>
</head>
<body class="grey lighten-4">

    <?php include('header.php'); ?>

    <div class="container">
        <div class="card-panel teal lighten-4">
        
            <h4 class="center teal-text text-darken-3" >
            <img src="../Media/Huella.png" alt="huellita" width=30>
                Registrar Mascota
                <img src="../Media/Huella.png" alt="huellita" width=30>
            </h4>
        </div>

        <form action="../Controlador/createMascota.php" method="post" class="card-panel">
            <div class="input-field">
                <input id="id_mascota" type="text" name="id_mascota" required maxlength="100">
                <label for="id_mascota">ID de la Mascota</label>
            </div>
            
            <div class="input-field">
                <input id="nombre" type="text" name="nombre" required maxlength="100">
                <label for="nombre">Nombre de la Mascota</label>
            </div>

            <div class="input-field">
                <input id="edad" type="text" name="edad" required maxlength="100">
                <label for="edad">Edad</label>
            </div>

            <div class="input-field">
                <input id="tipo" type="text" name="tipo" required maxlength="100">
                <label for="tipo">Tipo</label>
            </div>

            <div class="input-field">
                <input id="raza" type="text" name="raza" required maxlength="100">
                <label for="raza">Raza</label>
            </div>

            <div class="input-field">
                <input id="color" type="text" name="color" required maxlength="8">
                <label for="color">Color</label>
            </div>

            <div class="input-field">
                <input id="peso" type="text" name="peso" required maxlength="8">
                <label for="peso">Peso</label>
            </div>

            <div class="input-field">
                <input id="nombre_dueno" type="text" name="nombre_dueno" required maxlength="100">
                <label for="nombre_dueno">Nombre del Dueño</label>
            </div>

            <button type="submit" name="submit" class="btn teal darken-2 waves-effect waves-light">Enviar Registro</button>
        </form>

        <div class="center">
            <a href="./RegistrarMascota.php" class="btn-small teal lighten-1 waves-effect waves-light">Nuevo Registro</a>
            <a href="./Principal.php" class="btn-small teal lighten-1 waves-effect waves-light">Ver Registros</a>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>