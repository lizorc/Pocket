<?php

    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $DBname = 'Pocket';

    $connection = mysqli_connect($host, $user, $password, $DBname);

    if(!$connection){

        $_SESSION['MSM'][] = "Failed connection";
        exit;
    }
?>