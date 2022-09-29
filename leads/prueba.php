
<?php

    session_start();
    require 'config/funciones.php';
    require 'config/connection.php';


    $host_name = 'db5001572668.hosting-data.io';
    $database   = 'dbs1311113';
    $user_name = 'dbu1462944';
    $password = 'Galleta#2021MKT%';

	
    if(!isset($_SESSION["id_usuario"]))
	{
		header("Location: auth/login.php");
	}

	$idUsuario = $_SESSION['id_usuario'];

	$sql = "SELECT id, name, last_name, company, email, password, roles FROM users WHERE id = '$idUsuario'";
	$result = $conn->query($sql);

	$rowUser = $result->fetch_assoc();

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    $conn = new PDO("mysql:host=$host_name; dbname=$database", $user_name, $password);
    $fecha_inicio_error = '';
    $fecha_final_error = '';

    if(isset($_POST["export"])) {
        if(empty($_POST["fecha_inicio"])) {
            $fecha_inicio_error = '<label class="text-danger">La fecha de inicio es requerida</label>';
        }
        else if(empty($_POST["fecha_final"])) {
            $fecha_final_error = '<label class="text-danger">La fecha final es requerida</label>';
        }
        else {
            $inicioF = $_POST["fecha_inicio"];
            $finalF = $_POST["fecha_final"];

            $nombre_archivo = 'leads-del-'.$inicioF.'-a-'.$finalF.'.csv';
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$nombre_archivo");
            header("Content-Type: application/csv;");

            $archivo = fopen('php://output', 'w');

            $header = array("Id", "Nombre", "Telefono", "Email", "Proyecto", "Nombre negocio", "Descripcion", "Pagina origen", "Fecha contacto");

            fputcsv($archivo, $header);

            $query = "SELECT * FROM clientes WHERE fecha_contacto >= '".$inicioF."' AND fecha_contacto <= '".$finalF."' ORDER BY fecha_contacto DESC";
            $statement = $conn->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row) {
                $data = array();
                $data[] = $row["id_cliente"];
                $data[] = $row["nombre_cliente"];
                $data[] = $row["telefono_cliente"];
                $data[] = $row["correo_cliente"];
                $data[] = $row["proyecto_cliente"];
                $data[] = $row["nom_negocio_cliente"];
                $data[] = $row["descripcion_cliente"];
                $data[] = $row["pagina_origen"];
                $data[] = $row["fecha_contacto"];

                fputcsv($archivo, $data);
            }
            fclose($archivo);
            exit;
        }
    }

    $query = "SELECT * FROM clientes ORDER BY fecha_contacto DESC;";

    $statement = $conn->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();

?>

<html>

<head>
    <title>Leads</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1d7dc8a672.js" crossorigin="anonymous"></script>
</head>

<style>
    body {
    margin-top: 5rem;
}
</style>

<body>
    <nav class="navbar fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="assets/logos/galleta-logo-2.svg" width="200" height="50" alt="">
        </a>
        <a class="btn btn-outline-dark" href="auth/logout.php">Cerrar sesion</a>
    </nav>
    <div class="container box">
        <h3 class="text-center" style="margin-top: 1rem; margin-bottom: 4rem;">Base de datos leads</h3>
        <div class="row">
            <form method="post" class="d-inline-flex mx-auto">
                <div class="input-daterange">
                    <div class="form-group" style="float: left; width: 48%;">
                        <input class="form-control" type="text" placeholder="Fecha de inicio"
                            onfocus="(this.type='date')" name="fecha_inicio">
                        <?php echo $fecha_inicio_error; ?>
                    </div>
                    <div class="form-group" style="float: right; width: 48%;">

                        <input class="form-control" type="text" placeholder="Fecha final" onfocus="(this.type='date')"
                            name="fecha_final">
                        <?php echo $fecha_final_error; ?>
                    </div>
                </div>
                <div class="form-group" style="padding-left: 1rem;">
                    <input type="submit" name="export" value="Generar Excel" class="btn btn-success" />
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th style="width:10%">Fecha entrada</th>
                        <th style="width:10%">Fecha salida</th>
                        <th>Paquete</th>
                        <th>Tipo solicitud</th>
                        <th style="width:10%">Fecha creado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($result as $row) {
                        echo '
                            <tr>
                                <td>'.$row["id_cliente"].'</td>
                                <td>'.$row["nombre_cliente"].'</td>
                                <td>'.$row["telefono_cliente"].'</td>
                                <td>'.$row["correo_cliente"].'</td>
                                <td>'.$row["proyecto_cliente"].'</td>
                                <td>'.$row["nom_negocio_cliente"].'</td>
                                <td>'.$row["descripcion_cliente"].'</td>
                                <td>'.$row["pagina_origen"].'</td>
                                <td>'.$row["fecha_contacto"].'</td>
                            </tr>
                        ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>