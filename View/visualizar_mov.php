<!DOCTYPE html>
<html lan = "es">
    <head>
        <meta charset="UTF-8">
        <title> Visualizar Movimiento </title>
        <link rel="stylesheet" href="../Css/table.css">
    </head>

    <body>

        <h2>
           Hola <?php include '../Controller/Inicio.php'; echo $username; ?>            
        </h2>
        
        <div> <a href="inicio.php">Inicio</a> </div>
        
        <div> <a href="Logout.php">Cerrar Sesión</a> </div>

        <?php
            $Month = $_GET['Month'];
            $Mes = $_GET['Mes'];
            $Registros = unserialize(urldecode($_GET['Registros']));
            $Ingresos = unserialize(urldecode($_GET['Ingresos']));
            $Egresos = unserialize(urldecode($_GET['Egresos']));
            $Totales = unserialize(urldecode($_GET['Totales']));
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

    <h2>Total Ingresos:</h2>

    <table>
        <tr>
            <th>Cuenta</th>
            <th>Valor</th>
        </tr>

        <?php foreach ($Ingresos as $Ingreso) : ?>
        <tr>
            <td><?php echo $Ingreso["Account"]; ?></td>
            <td><?php echo $Ingreso["SUM(Value)"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Total Egresos:</h2>

    <table>
        <tr>
            <th>Cuenta</th>
            <th>Valor</th>
        </tr>

        <?php foreach ($Egresos as $Egreso) : ?>
        <tr>
            <td><?php echo $Egreso["Account"]; ?></td>
            <td><?php echo $Egreso["SUM(Value)"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Total Mes:</h2>

    <table>
        <tr>
            <th>Cuenta</th>
            <th>Valor</th>
        </tr>

        <?php foreach ($Totales as $Total) : ?>
        <tr>
            <td><?php echo $Total["Account"]; ?></td>
            <td><?php echo $Total["Saldo"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    </body>

</html>


