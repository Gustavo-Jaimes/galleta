<?php
require "secretInfo/conexion_BD.php";

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $selectProyectos = $_POST['selectProyectos'];
  $negocio = $_POST['negocio'];
  $descripcion = $_POST['descripcion'];
  $origenForm = 'Pagina Desarrollo web';

  date_default_timezone_set("America/Mexico_City");
  $fecha = date('Y-m-d H:i:s');

  $query = mysqli_query($conexion, "INSERT INTO clientes (nombre_cliente, telefono_cliente, proyecto_cliente, nom_negocio_cliente, descripcion_cliente, pagina_origen, fecha_contacto) VALUES ('".$nombre."', '".$telefono."', '".$selectProyectos."', '".$negocio."', '".$descripcion."', '".$origenForm."', '".$fecha."')");

  if ($query)
  {
      header('Location: index.php');
      echo "OK";
  }
  else
  {
      echo "ERROR: ".mysqli_error($conexion);
  }


  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.ionos.mx';
    $mail->SMTPAuth = true;
    $mail->Username = 'leads@galletamkt.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'GalletaMKT77%'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('hol@galletamkt.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('leads@galletamkt.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Página desarrollo web GalletaMKT cotización de '.$selectProyectos;
    $mail->Body = "<h3>Nombre : $nombre <br>Teléfono: $telefono <br>Proyecto : $selectProyectos <br>Negocio : $negocio <br>Descripción : $descripcion </h3>";

    $mail->send();
    $alert = '<script type="text/javascript">
    alert("Formulario enviado correctamente, nos pondremos en contacto lo antes posible");
    window.location.href="desarrollo-web.php";
    </script>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
