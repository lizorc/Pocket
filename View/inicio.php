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

        <div> <a href="Logout.php">Cerrar Sesión</a> </div>

        <div> <a href="registro_mov.php">Registrar Movimiento</a> </div>

        
        <form action = "../Controller/VisualizarMov.php" method = "POST">

            <div class = "Text" > Selecciona el mes que quieres visualizar: </div>
            <select name="Month" required>
                <option value="">Selecciona una opción</option>
                <option value="01">Enero</option>
                <option value="02">Febrero</option>
                <option value="03">Marzo</option>
                <option value="04">Abril</option>
                <option value="05">Mayo</option>
                <option value="06">Junio</option>
                <option value="07">Julio</option>
                <option value="08">Agosto</option>
                <option value="09">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>

            <div>
                <input class = "submit" type = "submit" value = "Visualizar Movimiento"/>
            </div>

        </form>

        <div>
            <?php include '../Controller/Extra/MSM.php'; ?>
        </div>

    </body>

</html>