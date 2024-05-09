<?php
    include 'Extra/BD.php';
    include 'Extra/MSM.php';

    // Declarations
    $D = $_POST;
    $Month = $D['Month'];

    // Consult Password in the Table 
    $SQL = "SELECT * FROM Movement WHERE MONTH(Date) = $Month";
    $Result = $connection -> query($SQL);

    $SQL1 = "SELECT Account, SUM(Value) FROM Movement WHERE MONTH(Date) = $Month AND Control = 'Ingreso' GROUP BY Account";
    $Result1 = $connection -> query($SQL1);

    $SQL2 = "SELECT Account, SUM(Value) FROM Movement WHERE MONTH(Date) = $Month AND Control = 'Egreso' GROUP BY Account";
    $Result2 = $connection -> query($SQL2);

    $SQL3 = "SELECT Account, 
    SUM(CASE WHEN Control = 'Ingreso' THEN Value ELSE 0 END),
    SUM(CASE WHEN Control = 'Egreso' THEN Value ELSE 0 END),
    SUM(CASE WHEN Control = 'Ingreso' THEN Value ELSE -Value END) AS Saldo
    FROM Movement WHERE MONTH(Date) = $Month GROUP BY Account";
    $Result3 = $connection -> query($SQL3);

    $Registros = [];
    $Ingresos = [];
    $Egresos = [];
    $Totales = [];

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
    if ($Month == 12){ $Mes = 'Diciembre'; }

    if ($Result -> num_rows > 0) {
    
        // Success
        while($row = $Result -> fetch_assoc()) {
            $Registros[] = $row;

        }

        if ($Result1 -> num_rows > 0) {
    
            // Success
            while($row = $Result1 -> fetch_assoc()) {
                $Ingresos[] = $row;
    
            }
        }

        if ($Result2 -> num_rows > 0) {
    
            // Success
            while($row = $Result2 -> fetch_assoc()) {
                $Egresos[] = $row;
    
            }
        }

        if ($Result3 -> num_rows > 0) {
    
            // Success
            while($row = $Result3 -> fetch_assoc()) {
                $Totales[] = $row;
    
            }
        }
    
        header('Location: ../View/visualizar_mov.php?Month='.$Month.'&Mes='.$Mes.'&Registros='.urlencode(serialize($Registros))
        .'&Ingresos='.urlencode(serialize($Ingresos)).'&Egresos='.urlencode(serialize($Egresos)).'&Totales='.urlencode(serialize($Totales)));
        exit;

    } else {
        
        // Fail
        $_SESSION['MSM'][] = 'No se encontraron Movimientos en '.$Mes;
        header('Location: ../View/inicio.php');
        exit;
    }

?>