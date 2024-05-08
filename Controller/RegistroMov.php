<?php
    include 'Extra/MSM.php';

    if (!isset($_SESSION['Name'])) {
        header('Location: ../View/login.php'); // Redirige al usuario si no ha iniciado sesión
        exit;
    } else {
        $username = $_SESSION['MSM']['Name'];
        header('Location: ../View/inicio.php');
        exit;
    }
        
    // Obtener el nombre de usuario desde la sesión    
    $username = $_SESSION['Name'];
    
    include 'Extra/BD.php';
    


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Declarations
        $D = $_POST;
        $Date = $D['Date'];
        $Account = $D['Account'];
        $Control = $D['Control'];
        $Reason = $D['Reason'];
        $Value = $D['Value'];

        // Insert in the Table
        $insert = "INSERT INTO Movement (Name_User, Date, Account, Control, Reason, Value) VALUES ('$username', '$Date', '$Account', '$Control', '$Reason', '$Value')";

        if( mysqli_query($connection, $insert)){

            // Success
            $_SESSION['MSM'][] = 'Los Datos se han registrado exitosamente :)';
            header('Location: ../View/inicio.php');
            exit;

        } else {

            // Fail
            $_SESSION['MSM'][] = 'Hubo un problema :(';
            header('Location: ../View/inicio.php');
            exit;

        }

    }

    $connection -> close();
?>