<?php
    include 'Extra/BD.php';
    include 'Extra/MSM.php';

    // Declarations
    $D = $_POST;
    $Name = $D['Name'];
    $Password = $D['Password'];

    // Consult Password in the Table 
    $SQL = "SELECT Password FROM User WHERE Name = '$Name'";
    $Result = $connection -> query($SQL);

    if ($Result -> num_rows > 0) {
        // Check password
        $F = $Result->fetch_assoc();
        $Pass_Hash = $F["Password"];

        if (password_verify($Password, $Pass_Hash)) {
            
            // Success
            $_SESSION['MSM'][] = 'Hola '.$Name;
            header('Location: ../View/inicio.php');
            exit;

        } else {
            // Fail
            $_SESSION['MSM'][] = 'Contraseña Incorrecta :( ';
            header('Location: ../View/login.php');
            exit;

        }
    } else {
        
        // Fail
        $_SESSION['MSM'][] = 'Usuario no Encontrado :(';
        header('Location: ../View/login.php');
        exit;
    }

    $connection -> close();
?>
