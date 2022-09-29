<?php
    $cabecera = "From: Galleta Marketing Digital <hol@galletamkt.com>\r\n";
    $destino = "egutierrez@galletamkt.com 
";
    $nombre = $_POST["nombre"];
    $whatsapp = $_POST["telefono"];
    $selectProyecto =  $_POST["selectProyectos"];
    $proyecto = $_POST["descripcion"];
    

   
        $destino = "egutierrez@galletamkt.com";
        $asunto = "Leads Pagina web";
        $contenido = "Nombre: " . $nombre . "\nWhatsApp: " . $whatsapp . "\nProyecto: " . $selectProyecto. "\nDescripción del proyecto: " . $proyecto;
 
    

    mail($destino,$asunto,$contenido,$cabecera );
    echo'<script type="text/javascript">
    alert("Formulario enviado correctamente, nos pondremos en contacto lo antes posible");
    window.location.href="index.php";
    </script>';

?>