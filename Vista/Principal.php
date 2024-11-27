<?php
session_start();
$id_empleado = $_SESSION['id_empleado']; // ID del empleado autenticado

if (!isset($id_empleado)) {
    header("Location: ./login/index.php");
    exit;
} else {
    require "../Modelo/conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    // Consulta para obtener registros
    $consulta_sql = "SELECT * FROM mascota";
    $resultado = $conexion->query($consulta_sql);
    $count = mysqli_num_rows($resultado);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="../starter-template/css/style.css">
    <link rel="shortcut icon" href="../Media/favicon.png" type="image/x-icon">
</head>
<body class="fondoCafe">

<?php include('header.php'); ?>
    <main class="container">
        <h1>Bienvenido :)</h1>
        
        <?php if ($count > 0): ?>
            <table class="highlight centered responsive-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad(Años)</th>
                        <th>Tipo</th>
                        <th>Raza</th>
                        <th>Color</th>
                        <th>Peso(Kg)</th>
                        <th>Fecha de Ingreso</th>
                        <th>Nombre del Dueño</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
                        <tr>
                            <td><?= $row['id_mascota']; ?></td>
                            <td><?= $row['nombre']; ?></td>
                            <td><?= $row['edad']; ?></td>
                            <td><?= $row['tipo']; ?></td>
                            <td><?= $row['raza']; ?></td>
                            <td><?= $row['color']; ?></td>
                            <td><?= $row['peso']; ?></td>
                            <td><?= $row['fecha_ingreso']; ?></td>
                            <td><?= $row['nombre_dueno']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <h1 class="red-text">Sin ningún registro</h1>
        <?php endif; ?>

        <div class="center">
            <a href="./EliminarMascota.php" class="btn red darken-3">Eliminar Mascota</a>
            <a href="./RegistrarMascota.php" class="btn green darken-2">Registrar Mascota</a>
        </div>
    </main>
    <?php include('footer.php'); ?>
    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>