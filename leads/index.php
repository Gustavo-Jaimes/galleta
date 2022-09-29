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

    $query = "SELECT * FROM clientes ORDER BY fecha_contacto DESC;";

    $statement = $conn->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Arturo Cuevas">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Leads</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" />
    <!-- DataTables CSS-->
    <link rel="stylesheet" href="css/datatables/datatables.css">
    <link rel="stylesheet" href="css/datatables/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="css/datatables/responsive.bootstrap4.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/1d7dc8a672.js" crossorigin="anonymous"></script>

    <!-- DataTables JS -->
    <script src="js/datatables/jquery.dataTables.js"></script>
    <script src="js/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/datatables/dataTables.responsive.js"></script>
    <script src="js/datatables/responsive.bootstrap4.js"></script>
</head>

<style>
body {
    margin-top: 5rem;
}
</style>

<body>
    <nav class="navbar fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="assets/logos/galleta-logo-2.svg" width="175" height="50" alt="">
        </a>
        <a class="btn btn-outline-dark" href="auth/logout.php">Cerrar sesion</a>
    </nav>
    <div class="container box">
        <h3 class="text-center" style="margin-top: 1rem; margin-bottom: 4rem;">Base de datos leads</h3>
        <div class="row">
            <form action="server/generar-excel" method="post" class="d-inline-flex mx-auto">
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
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="tabla-leads" class="table table-striped table-bordered table-hover dt-responsive"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Proyecto</th>
                            <th>Nombre negocio</th>
                            <th>Descripcion</th>
                            <th>Pagina origen</th>
                            <th>Fecha creado</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Proyecto</th>
                            <th>Nombre negocio</th>
                            <th>Descripcion</th>
                            <th>Pagina origen</th>
                            <th>Fecha creado</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</body>



<script>
$('#tabla-leads').DataTable({
    "ajax": {
        "url": "server/consulta-datatable.php",
        "dataSrc": "",
        "deferRender": true,
        "retrieve": true,
        "processing": true
    },
    "order": [[ 0, "desc" ]],
    "columns": [{
            "data": "id_cliente"
        },
        {
            "data": "nombre_cliente"
        },
        {
            "data": "telefono_cliente"
        },
        {
            "data": "correo_cliente"
        },
        {
            "data": "proyecto_cliente"
        },
        {
            "data": "nom_negocio_cliente"
        },
        {
            "data": "descripcion_cliente"
        },
        {
            "data": "pagina_origen"
        },
        {
            "data": "fecha_contacto"
        }
    ],
    "language": {
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Se muestrah registros del _START_ al _END_ de un total de _TOTAL_",
        "sInfoEmpty": "Se muestrah registros del 0 al 0 de un total de 0",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }

    }
});
</script>


</html>