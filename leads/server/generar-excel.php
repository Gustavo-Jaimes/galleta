<?php 

    $host_name = 'db5001572668.hosting-data.io';
    $database   = 'dbs1311113';
    $user_name = 'dbu1462944';
    $password = 'Galleta#2021MKT%';

    $conn = new PDO("mysql:host=$host_name; dbname=$database", $user_name, $password);


    $inicioF = $_POST["fecha_inicio"];
    $finalF = $_POST["fecha_final"];

    $query = "SELECT * FROM clientes WHERE fecha_contacto >= '".$inicioF."' AND fecha_contacto <= '".$finalF."' ORDER BY fecha_contacto DESC";
    $statement = $conn->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();

    $nombre_archivo = 'leads-del-'.$inicioF.'-a-'.$finalF.'.xls';

    header('Expires: 0');
    header('Cache-control: private');
    header("Content-Type: application/vnd.ms-excel; charset=utf-8");    
    header("Cache-Control: cache, must-revalidate"); 
    header('Content-Description: File Transfer');
    header('Last-Modified: '.date('D, d M Y H:i:s'));
    header("Pragma: public"); 
    header('Content-Disposition: attachment; filename="'.$nombre_archivo.'"');
    header("Content-Transfer-Encoding: binary");

    echo utf8_decode("<table border='0'> 
        <tr> 
            <td style='font-weight:bold; border:1px solid #eee;'>Id</td> 
            <td style='font-weight:bold; border:1px solid #eee;'>Nombre</td>
            <td style='font-weight:bold; border:1px solid #eee;'>Telefono</td>
            <td style='font-weight:bold; border:1px solid #eee;'>Email</td>
            <td style='font-weight:bold; border:1px solid #eee;'>Proyecto</td>
            <td style='font-weight:bold; border:1px solid #eee;'>Nombre negocio</td>
            <td style='font-weight:bold; border:1px solid #eee;'>Descripcion</td>
            <td style='font-weight:bold; border:1px solid #eee;'>Pagina origen</td>		
            <td style='font-weight:bold; border:1px solid #eee;'>Fecha contacto</td>			
        </tr>");


        foreach ($result as $row => $item){
            echo utf8_decode("
            <tr>
                <td style='border:1px solid #eee;'>".$item["id_cliente"]."</td>
                <td style='border:1px solid #eee;'>".$item["nombre_cliente"]."</td>
                <td style='border:1px solid #eee;'>".$item["telefono_cliente"]."</td>
                <td style='border:1px solid #eee;'>".$item["correo_cliente"]."</td>
                <td style='border:1px solid #eee;'>".$item["proyecto_cliente"]."</td>
                <td style='border:1px solid #eee;'>".$item["nom_negocio_cliente"]."</td>
                <td style='border:1px solid #eee;'>".$item["descripcion_cliente"]."</td>
                <td style='border:1px solid #eee;'>".$item["pagina_origen"]."</td>
                <td style='border:1px solid #eee;'>".$item["fecha_contacto"]."</td>
            </tr>");
        }

    echo "</table>";

?>