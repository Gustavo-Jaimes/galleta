
<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once '../phpmailer/Exception.php';
require_once '../phpmailer/PHPMailer.php';
require_once '../phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['email'];
  $selectProyectos ='NA';
  $nom_negocio = 'NA';
  $descripcion = $_POST['descripcion'];
  $origenForm = 'Página Workshop';

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.ionos.mx';
    $mail->SMTPAuth = true;
    $mail->Username = 'egutierrez@galletamkt.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'GalletaMKT77%'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('cursos@galletamkt.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('vgaribay@galletamkt.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
    $mail->addCC('mflores@galletamkt.com');
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Información de cursos';
    $mail->Body = "<h3>Nombre : $nombre <br>Teléfono: $telefono <br>Correo : $correo <br>Descripción del proyecto : $descripcion <br>Origen: $origenForm </h3>";

    $mail->send();
    $alert = '<script type="text/javascript">
    alert("Formulario enviado correctamente, nos pondremos en contacto lo antes posible");
    window.location.href="https://galletamkt.com/cursos/curso-de-facebook-en-guadalajara.php";
    </script>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>