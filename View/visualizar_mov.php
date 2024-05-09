<!DOCTYPE html>
<html lan = "es">
    <head>
        <meta charset="UTF-8">
        <title> Visualizar Movimiento </title>
    </head>

    <body>

        <div class = "Text" > Hola <?php include '../Controller/Inicio.php'; echo $username; ?> </div>
        
        <div> <a href="inicio.php">Inicio</a> </div>
        
        <div> <a href="Logout.php">Cerrar Sesión</a> </div>

        <?php
            $Month = $_GET['Month'];
            $Mes = $_GET['Mes'];
            $Registros = unserialize(urldecode($_GET['Registros']));
        ?>

        <h1>Movimientos Registrados en <?php echo $Mes; ?> </h1>

        <table>
        <tr>
            <th>Fecha</th>
            <th>Cuenta</th>
            <th>Control</th>
            <th>Motivo</th>
            <th>Valor</th>
        </tr>

        <?php foreach ($Registros as $Registro) : ?>
            <tr>
                <td><?php echo $Registro["Date"]; ?></td>
                <td><?php echo $Registro["Account"]; ?></td>
                <td><?php echo $Registro["Control"]; ?></td>
                <td><?php echo $Registro["Reason"]; ?></td>
                <td><?php echo $Registro["Value"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
    <div> <a href="inicio.php">Volver</a> </div>

    </body>

</html>


