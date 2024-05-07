<!DOCTYPE html>
<html lan = "en">
    <head>
        <meta charset="UTF-8">
        <title> Inicio Sesión </title>
    </head>

    <body>

        <div class = "Box-White">

            <div class = "Title" > Iniciar Sesión </div>

            <form action = "../Controller/Login.php" method = "POST">

                <div class = "Text" > Nombre </div>
                <input type = "text" name = "Name" required/>

                <div class = "Text" > Contraseña </div>
                <input type = "password" name = "Password" required/>

                <div>
                    <input class = "submit" type = "submit" value = "Iniciar Sesión"/>
                </div>

            </form>

            <div>
                <?php include '../Controller/Extra/MSM.php'; ?>
            </div>

            <div class = "Text" > ¿Olvidaste tu contraseña? Haz click <a href="login.php"> aqui</a> </div> 
            <div class = "Text" > ¿No estas registrado? <a href="index.php">Registrarte</a> </div> 
        
        </div>

    </body>

</html>