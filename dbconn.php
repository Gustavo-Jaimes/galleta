<?php
	$host_name = 'db5006942344.hosting-data.io';
	$database = 'dbs5732168';
	$user_name = 'dbu2251743';
	$password = 'GalletaMKT%77%2022';
	$conexion = new mysqli($host_name, $user_name, $password, $database);

	$conexion->set_charset("utf8");

	if(mysqli_connect_errno())
	{
		echo 'Conexion Fallida: ', mysqli_connect_error();
		exit();
	}

?>