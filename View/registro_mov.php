<!DOCTYPE html>
<html lan = "es">
    <head>
        <meta charset="UTF-8">
        <title> Registrar Movimiento </title>
    </head>

    <body>

        <div class = "Text" > Hola <?php include '../Controller/Inicio.php'; echo $username; ?> </div>
        
        <div> <a href="inicio.php">Inicio</a> </div>
        
        <div> <a href="Logout.php">Cerrar Sesión</a> </div>

        

        <div>
            <h1> Registrar Movimiento </h1>

            <form action = "../Controller/RegistroMov.php" method = "POST">

                <div class = "Text" > Fecha </div>
                <input type = "date" name = "Date" required/>

                <div class = "Text" > Cuenta </div>
                <input type = "text" name = "Account" required/>

                <div class = "Text" > Control </div>
                <input type = "text" name = "Control" required/>

                <div class = "Text" > Motivo </div>
                <input type = "text" name = "Reason" required/>

                <div class = "Text" > Valor </div>
                <input type="number" name="Value" step="any" required/>

                <div>
                    <input class = "submit" type = "submit" value = "Registrar Movimiento"/>
                </div>

            </form>

            <div class = "Text">
                <?php include '../Controller/Extra/MSM.php';?>
            </div>
        
        </div>

    </body>

</html>