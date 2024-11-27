<?php
include "../Modelo/conexion.php";
mysqli_set_charset($conexion, 'utf8');
$nombreMas = $_POST['nombre'];

$buscarMascota = "SELECT * FROM mascota WHERE nombre ='$nombreMas'";

$resultado = $conexion->query($buscarMascota);
$count = mysqli_num_rows($resultado);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Registro Mascota</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>


<?php include('../Vista/header.php'); ?>

<div class="container" style="margin-top: 50px;">
    <?php if ($count == 1): ?>
        <div class="card-panel red lighten-1 white-text">
            <h5 class="center">La mascota ya está registrada</h5>
            <a href="../Vista/RegistrarMascota.php" class="waves-effect waves-light btn teal darken-3">Nuevo registro</a>
        </div>
    <?php else: ?>
        <?php
            $query = "INSERT INTO mascota (id_mascota, nombre, edad, tipo, raza, color, peso, nombre_dueno) 
                VALUES (
                    '$_POST[id_mascota]',
                    '$_POST[nombre]',
                    '$_POST[edad]',
                    '$_POST[tipo]',
                    '$_POST[raza]',
                    '$_POST[color]',
                    '$_POST[peso]',
                    '$_POST[nombre_dueno]'
                )";
                
            if (mysqli_query($conexion, $query)): ?>
                <div class="card-panel green lighten-1 white-text">
                    <h5 class="center">¡Mascota registrada con éxito!</h5>
                    <a href="../Vista/RegistrarMascota.php" class="waves-effect waves-light btn teal darken-3">Nuevo registro</a>
                    <a href="../Vista/Principal.php" class="waves-effect waves-light btn teal darken-3">Ver registros</a>
                </div>
            <?php endif; ?>
    <?php endif; ?>
</div>

<?php include('../Vista/footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>

    M.AutoInit();
</script>

</body>
</html>