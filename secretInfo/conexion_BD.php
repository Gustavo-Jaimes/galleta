<?php
  $host_name = 'localhost';
  $database = 'dbs778238';
  $user_name = 'root';
  $password = '';

  $conexion = new mysqli($host_name, $user_name, $password, $database);

  if ($conexion->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $conexion->connect_error .'</p>');
  }
?>