<?php

    $host_name = 'db5001572668.hosting-data.io';
    $database = 'dbs1311113';
    $user_name = 'dbu1462944';
    $password = 'Galleta#2021MKT%';
    $conn = new mysqli($host_name, $user_name, $password, $database);

    if ($conn->connect_error) {
        die('<p>Error al conectar con servidor MySQL: '. $link->connect_error .'</p>');
    } 
    else {
        // echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p>';
    }
?>