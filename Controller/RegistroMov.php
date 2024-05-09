<?php
    session_start();

    if (!isset($_SESSION['Name'])) {
        header('Location: ../View/login.php');
        exit;
    } else {
        $username = $_SESSION['Name'];
    }
    
    session_abort();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        include 'Extra/BD.php';
        include 'Extra/MSM.php';


        // Declarations
        $D = $_POST;
        $Date = $D['Date'];
        $Account = $D['Account'];
        $Control = $D['Control'];
        $Reason = $D['Reason'];
        $Value = $D['Value'];

        // Insert in the Table
        $insert = "INSERT INTO Movement (Name_User, Date, Account, Control, Reason, Value) VALUES ('$username', '$Date', '$Account', '$Control', '$Reason', '$Value')";

        // $mensaje = ':)';
        if( mysqli_query($connection, $insert)){

            // Success
            $_SESSION['MSM'][] = 'Los Datos se han registrado exitosamente :)';
            header('Location: ../View/registro_mov.php');
            exit;

        } else {

            // Fail
            $_SESSION['MSM'][] = 'Hubo un problema :(';
            header('Location: ../View/registro_mov.php');
            exit;

        }

    }

    $connection -> close();
    session_abort();
?>