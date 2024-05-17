<?php
    session_start();
    session_destroy(); // Destruye la sesión
    header('Location: ../View/logout.php');
    exit;
?>
