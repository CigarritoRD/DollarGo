<?php

// creando conexion a base de datos
function conexionDb(): mysqli
{
    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'dollargo';

    $db = new mysqli( $host, $username, $password, $dbname);

    if(!$db){
        echo "Error: No se pudo conectar a MySQL.";
        echo 'errno de depuracion' . mysqli_connect_errno();
        echo 'errno de depuracion' . mysqli_connect_error();
    }
    
return $db;
};



// $query = "SELECT usuario, apellido FROM usuarios";

// // prepara la consulta a la base de datos
// $stmt = $db->prepare($query);

// // ejecuta la consulta
// $stmt->execute();

// //guarda el resultado en la variable que escribas aqui, puedes traer mas de una
// $stmt->bind_result($usuarios, $apellido);

// // hace el fetch a la base trayendo un resultado
// $stmt->fetch();

// //while para que mientras haya resultado siga imprimiendolos
// while($stmt->fetch()):
//     echo '<pre>';
//     var_dump($usuarios, $apellido);
//     echo '</pre>';
// endwhile;
