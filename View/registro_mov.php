<!DOCTYPE html>
<html lan = "es">
    <head>
        <meta charset="UTF-8">
        <title> Registrar Movimiento </title>
    </head>

    <body>

        <h2>
           Hola <?php include '../Controller/Inicio.php'; echo $username; ?>            
        </h2>
        
        <div> <a href="inicio.php">Inicio</a> </div>
        
        <div> <a href="Logout.php">Cerrar Sesión</a> </div>

        <div>
            <h1> Registrar Movimiento </h1>

            <form action = "../Controller/RegistroMov.php" method = "POST">

                <div class = "Text" > Fecha: </div>
                <input type = "date" name = "Date" required/>

                <div class = "Text" > Cuenta: </div>
                <select name="Account" required>
                    <option value="">Selecciona una opción</option>
                    <option value="Debito">Debito</option>
                    <option value="Credito">Credito</option>
                    <option value="Efectivo">Efectivo</option>
                </select>

                <div class = "Text" > Control: </div>
                <select name="Control" required>
                    <option value="">Selecciona una opción</option>
                    <option value="Ingreso">Ingreso</option>
                    <option value="Egreso">Egreso</option>
                </select>

                <div class = "Text" > Motivo: </div>
                <select name="Reason" required>
                    <option value="">Selecciona una opción</option> 
                    <option value="Venta">Venta</option>
                    <option value="Comida">Comida</option>
                    <option value="Salidas">Salidas</option>
                    <option value="Quincena">Quincena</option>
                    <option value="Arriendo">Arriendo</option>
                    <option value="Gasolina">Gasolina</option>
                    <option value="Transferencia">Trasnferencia</option>
                </select>

                <div class = "Text" > Valor: </div>
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