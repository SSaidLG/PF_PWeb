<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error al ingresar las credenciales</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>


<?php include('../header.php'); ?>

<div class="container" style="margin-top: 50px;">
    <div class="card-panel red lighten-1 white-text center">
        <h5>Error al ingresar las credenciales</h5>
        <p>Por favor, verifica tu número de empleado y contraseña.</p>
    </div>

    <div class="row">
        <form method="POST" action="../../Controlador/loguear.php" class="col s12">
            <div class="input-field">
                <input type="text" id="id_empleado" name="id_empleado" required />
                <label for="id_empleado">Número de Empleado</label>
            </div>
            <div class="input-field">
                <input type="password" id="password" name="password" required />
                <label for="password">Contraseña</label>
            </div>
            <button type="submit" class="waves-effect waves-light btn teal darken-3">Iniciar Sesión</button>
        </form>
    </div>
</div>

<?php include('../footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    M.AutoInit();
</script>

</body>
</html>