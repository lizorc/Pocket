<!DOCTYPE html>
<html lan = "es">
    <head>
        <meta charset="UTF-8">
        <title> Inicio </title>
    </head>

    <body>
        <h1>
           Hola <?php include '../Controller/Inicio.php'; echo $username; ?>            
        </h1>

        <div>
        <a href="Logout.php">Cerrar Sesión</a>
        </div>

        <div>
        <a href="registro_mov.php">Registrar Movimiento</a>
        </div>

    </body>

</html>