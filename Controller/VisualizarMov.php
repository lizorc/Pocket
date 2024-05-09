<?php
    include 'Extra/BD.php';
    include 'Extra/MSM.php';

    // Declarations
    $D = $_POST;
    $Month = $D['Month'];

    // Consult Password in the Table 
    $SQL = "SELECT * FROM Movement WHERE MONTH(Date) = $Month";
    $Result = $connection -> query($SQL);

    $Registros = [];

    if ($Month == 1){ $Mes = 'Enero'; }
    if ($Month == 2){ $Mes = 'Febrero'; }
    if ($Month == 3){ $Mes = 'Marzo'; }
    if ($Month == 4){ $Mes = 'Abril'; }
    if ($Month == 5){ $Mes = 'Mayo'; }
    if ($Month == 6){ $Mes = 'Junio'; }
    if ($Month == 7){ $Mes = 'Julio'; }
    if ($Month == 8){ $Mes = 'Agosto'; }
    if ($Month == 9){ $Mes = 'Septiembre'; }
    if ($Month == 10){ $Mes = 'Octubre'; }
    if ($Month == 11){ $Mes = 'Noviembre'; }
    if ($Month == 12){ $Mes = 'Dciembre'; }

    if ($Result -> num_rows > 0) {
    
        // Success
        while($row = $Result -> fetch_assoc()) {
            $Registros[] = $row;

        }
        header('Location: ../View/visualizar_mov.php?Month='.$Month.'&Mes='.$Mes.'&Registros='.urlencode(serialize($Registros)));
        exit;

    } else {
        
        // Fail
        $_SESSION['MSM'][] = 'No se encontraron Movimientos en '.$Mes;
        header('Location: ../View/inicio.php');
        exit;
    }

?>