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
    
    

?>