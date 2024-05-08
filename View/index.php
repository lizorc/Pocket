<!DOCTYPE html>
<html lan = "es">
    <head>
        <meta charset="UTF-8">
        <title> Registro </title>
    </head>

    <body>

        <div class = "Box-White">

            <div class = "Title" > Registrarte </div>

            <form action = "../Controller/Register.php" method = "POST">

                <div class = "Text" > Nombre </div>
                <input type = "text" name = "Name" required/>

                <div class = "Text" > Contraseña </div>
                <input type = "password" name = "Password" required/>

                <div>
                    <input class = "submit" type = "submit" value = "Registrarte"/>
                </div>

            </form>

            <div>
                <?php include '../Controller/Extra/MSM.php'; ?>
            </div>

            <div class = "Text" > ¿Ya estas registrado? <a href="login.php">Iniciar Sesión</a> </div> 

        </div>

    </body>

</html>