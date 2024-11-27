<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>


<?php include('../header.php'); ?>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col s12 m6 l4 offset-m3 offset-l4">
            <div class="card-panel teal lighten-3">
                <h5 class="center white-text">Iniciar Sesión</h5>
                <form method="POST" action="../../Controlador/loguear.php">
                    
                    <div class="input-field">
                        <input type="text" name="id_empleado" id="id_empleado" placeholder="Número de Empleado" required>
                        <label for="id_empleado">Número de Empleado</label>
                    </div>
                    
                    <div class="input-field">
                        <input type="password" name="password" id="password" placeholder="Contraseña" required>
                        <label for="password">Contraseña</label>
                    </div>
  
                    <div class="center">
                        <button type="submit" class="btn waves-effect waves-light teal darken-3">Iniciar Sesión</button>
                    </div>
                </form>
            </div>
        </div>
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