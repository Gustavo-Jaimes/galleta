<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

if (isset($_POST["nombre"])) {
  $nombre = '';
  $telefono = '';
  $selectProyectos = '';
  $negocio = '';
  $descripcion = '';

  $name_error = '';
  $tel_error = '';
  $proyecto_error = '';
  $negocio_error = '';
  $mensaje_error = '';
  $captcha_error = '';


  if (empty($_POST["nombre"])) {
    $name_error = 'El campo nombre es requerido';
  } else {
    $nombre = $_POST["nombre"];
  }

  if (empty($_POST["telefono"])) {
    $tel_error = 'El campo teléfono es requerido';
  } else {
    $telefono = $_POST["telefono"];
  }

  if (empty($_POST["selectProyectos"])) {
    $proyecto_error = 'El campo proyecto es requerido';
  } else {
    $selectProyectos = $_POST["selectProyectos"];
  }

  if (empty($_POST["negocio"])) {
    $negocio_error = 'El campo negocio es requerido';
  } else {
    $negocio = $_POST["negocio"];
  }

  if (empty($_POST["descripcion"])) {
    $mensaje_error = 'La descripción de tu proyecto es muy importante';
  } else {
    $descripcion = $_POST["descripcion"];
  }

  if (empty($_POST["g-captcha-response"])) {
    $captcha_error = 'Debes completar el Captcha';
  }
  else {
    $captcha = $_POST['g-recaptcha-response'];
    $secret_key = '6LfUoSgaAAAAAJwvAwKIdy_3NwSKJsqOM-zpjUUu';
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$captcha");
    $response_data = json_decode($response, TRUE);
    $error = json_encode($response_data);

    if(!$response_data['success']) {
      $captcha_error = $error;
    }
  } 

  if ($name_error == '' && $tel_error == '' && $proyecto_error == '' && $negocio_error == '' && $mensaje_error == '' && $captcha_error == '') {
    $mail = new PHPMailer(true);		
    $mail->isSMTP();
    //$mail->isMail();
    $mail->SMTPDebug = 0;		
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Host = 'smtp.ionos.mx';
    $mail->Port = '587';
    
    $mail->Username = 'egutierrez@galletamkt.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'GalletaMKT77%'; // Gmail address Password

    $mail->setFrom('hol@galletamkt.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('egutierrez@galletamkt.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Página desarrollo web GalletaMKT cotización de ' . $selectProyectos;
    $mail->Body = "<h3>Nombre : $nombre <br>Teléfono: $telefono <br>Proyecto : $selectProyectos <br>Negocio : $negocio <br>Descripción : $descripcion </h3>";



    if ($mail->send()) {
      $data = array(
        'success' => true
      );
    } else {
      $data = array(
        'success' => false
      );
      // echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=' . $pageError . '">';
    }
  } else {
    $data = array(
      'name_error' => $name_error,
      'tel_error' => $tel_error,
      'proyecto_error' => $proyecto_error,
      'negocio_error' => $negocio_error,
      'mensaje_error' => $mensaje_error,
      'captcha_error'  => $captcha_error

    );
  }
  echo json_encode($data);
}
