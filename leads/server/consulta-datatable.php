<?php 

    $host_name = 'db5001572668.hosting-data.io';
    $database   = 'dbs1311113';
    $user_name = 'dbu1462944';
    $password = 'Galleta#2021MKT%';

    $conn = new PDO("mysql:host=$host_name; dbname=$database", $user_name, $password);

    $query = "SELECT * FROM clientes";

    $statement = $conn->prepare($query);
    $statement->execute();
    $resultDB = $statement->fetchAll(PDO::FETCH_ASSOC);


    echo json_encode($resultDB, JSON_UNESCAPED_UNICODE)

?>  