<?php
    session_start();
    session_destroy(); // Destruye la sesión
    header('Location: ../View/login.php');
    exit;
?>
