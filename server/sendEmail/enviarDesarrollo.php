
<?php


use PHPMailer\PHPMailer\PHPMailer;

require_once '../../PHPMailer/src/PHPMailer.php';
require_once '../../PHPMailer/src/SMTP.php';
require_once '../../PHPMailer/src/Exception.php';


if (isset($_POST["nombreDesarrollo"])) {

	$nombreDesarrollo = '';
	$telefonoDesarrollo = '';
	$proyectosDesarrollo = '';
	$negocioDesarrollo = '';
	$descripcionDesarrollo = '';

	$nombreDesarrollo_error = '';
	$telefonoDesarrollo_error = '';
	$proyectosDesarrollo_error = '';
	$negocioDesarrollo_error = '';
	$descripcionDesarrollo_error = '';
	$captcha_error = '';

	if (empty($_POST["nombreDesarrollo"])) {
		$nombreDesarrollo_error = 'El nombre es requerido';
	} else {
		$nombreDesarrollo = $_POST["nombreDesarrollo"];
	}

	if (empty($_POST["telefonoDesarrollo"])) {
		$telefonoDesarrollo_error = 'El telefono es requerido';
	} else {
		$telefonoDesarrollo = $_POST["telefonoDesarrollo"];
	}

	if (empty($_POST["proyectosDesarrollo"])) {
		$proyectosDesarrollo_error = 'Seleccionar un proyecto es requerido';
	} else {
		$proyectosDesarrollo = $_POST["proyectosDesarrollo"];
	}

	if (empty($_POST["negocioDesarrollo"])) {
		$negocioDesarrollo_error = 'El nombre del negocio es requerido';
	} else {
		$negocioDesarrollo = $_POST["negocioDesarrollo"];
	}

	if (empty($_POST["descripcionDesarrollo"])) {
		$descripcionDesarrollo_error = 'Es requerido una breve descripcion del proyecto';
	} else {
		$descripcionDesarrollo = $_POST["descripcionDesarrollo"];
	}

	if (empty($_POST['g-recaptcha-response'])) {
		$captcha_error = 'Debes completar el Captcha';
	} else {
		$captcha = $_POST['g-recaptcha-response'];
		$secret_key = '6LcJvVIaAAAAAMcfEcPdDk-E3xDzbOP4MGba_PPO';
		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$captcha");
		$response_data = json_decode($response, TRUE);
		$error = json_encode($response_data);

		if (!$response_data['success']) {
			$captcha_error = $error;
		}
	}

	if ($nombreDesarrollo_error == '' && $telefonoDesarrollo_error == '' && $proyectosDesarrollo_error == '' && $negocioDesarrollo_error == '' && $descripcionDesarrollo_error == '' && $captcha_error == '') {


		$nombre = $_POST['nombreDesarrollo'];
		$telefono = $_POST['telefonoDesarrollo'];
		$proyecto = $_POST['proyectosDesarrollo'];
		$negocio = $_POST['negocioDesarrollo'];
		$descripcion = $_POST['descripcionDesarrollo'];
		$origenForm = 'Pagina Desarrollo web';

		date_default_timezone_set("America/Mexico_City");
		$fecha = date('d/m/Y');
		$hora = date('H:i');
		date_default_timezone_set("America/Mexico_City");
		$fechaDB = date('Y-m-d H:i:s');

		$mail = new PHPMailer(true);
		$mail->isSMTP();
		//$mail->isMail();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Host = 'smtp.ionos.mx';
		$mail->Port = '587';

		$mail->Username = 'leads@galletamkt.com';
		$mail->Password = 'GalletaMKT77%';

		$mail->setFrom('hol@galletamkt.com', 'Página desarrollo web GalletaMKT cotización de ' . $proyecto . '');

		$mail->AddAddress('leads@galletamkt.com');
		$mail->WordWrap = 50;

		$mail->IsHTML(true);
		$mail->CharSet = 'UTF-8';
		$mail->Subject = 'Proyecto: ' . $proyecto;
		$mail->Body = '
			<h3 align="center">Detalles del solicitante</h3>
			<p>Fecha y hora de contacto: ' . $fecha . ' ' . $hora . '</p>
			<table border="1" width="100%" cellpadding="5" cellspacing="5">
				<tr>
					<td width="30%">Nombre:</td>
					<td width="70%">' . $nombre . '</td>
				</tr>
				<tr>
					<td width="30%">Teléfono</td>
					<td width="70%">' . $telefono . '</td>
				</tr>
				<tr>
					<td width="30%">Proyecto</td>
					<td width="70%">' . $proyecto . '</td>
				</tr>
				<tr>
					<td width="30%">Negocio</td>
					<td width="70%">' . $negocio . '</td>
				</tr>
				<tr>
					<td width="30%">Descripción</td>
					<td width="70%">' . $descripcion . '</td>
				</tr>
			</table>
			';

		if ($mail->send()) {
			$data = array(
				'success' => true
			);

			require_once "../../secretInfo/conexion_BD.php";

			$query = mysqli_query($conexion, "INSERT INTO clientes (nombre_cliente, telefono_cliente, proyecto_cliente, nom_negocio_cliente, descripcion_cliente, pagina_origen, fecha_contacto) VALUES ('" . $nombre . "', '" . $telefono . "', '" . $proyecto . "', '" . $negocio . "', '" . $descripcion . "', '" . $origenForm . "', '" . $fechaDB . "')");
		} else {
			$data = array(
				'success' => false
			);
			// unlink($final_file);
		}
	} else {
		$data = array(
			'nombreDesarrollo_error' => $nombreDesarrollo_error,
			'telefonoDesarrollo_error' => $telefonoDesarrollo_error,
			'proyectosDesarrollo_error' => $proyectosDesarrollo_error,
			'negocioDesarrollo_error'  => $negocioDesarrollo_error,
			'descripcionDesarrollo_error'  => $descripcionDesarrollo_error,
			'captcha_error'  => $captcha_error
		);
	}
	echo json_encode($data);
}

?>
