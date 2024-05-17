<?php
    session_start();

    if (!isset($_SESSION['Name'])) {
        header('Location: ../View/index.php');
        exit;
    } else {
        $username = $_SESSION['Name'];
    }
    
    session_abort();
?>