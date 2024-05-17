<?php
    include 'Extra/BD.php';
    include 'Extra/MSM.php';

    // Declarations
    $D = $_POST;
    $Name = $D['Name'];
    $Password = $D['Password'];
    $Pass_Hash = password_hash($Password, PASSWORD_DEFAULT);

    // Insert in the Table
    $insert = "INSERT INTO User (Name, Password) VALUES ('$Name', '$Pass_Hash')";
    $SQL = "SELECT ID FROM User WHERE Name = '$Name'";
    $consult = $connection -> query($SQL);

    if ($consult -> num_rows > 0) {
        
        // Success
        $_SESSION['MSM'][] = 'Ya existe un Nombre registrado en el sistema :(  <a href="login.php">Iniciar Sesión</a>'; 
        header('Location: ../View/register.php');
        exit;
    } if( mysqli_query($connection, $insert)){

        // Success
        $_SESSION['MSM'][] = 'Te haz registrado Exitosamente :)';
        header('Location: ../View/register.php');
        exit;

    } else {

        // Fail
        $_SESSION['MSM'][] = 'No se :('; ?><a href="index.php">Iniciar Sesión</a> <?php
        header('Location: ../View/register.php');
        exit;

    }

    $connection -> close();

?> 