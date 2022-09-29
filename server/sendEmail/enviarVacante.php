<?php 

	use PHPMailer\PHPMailer\PHPMailer;
				
	require_once '../../PHPMailer/src/PHPMailer.php';
	require_once '../../PHPMailer/src/SMTP.php';
	require_once '../../PHPMailer/src/Exception.php';


	if(isset($_POST["emailVacante"])) {

		$vacantesDisponibles = '';
		$emailVacante = '';
		$nombreVacante = '';
		$telefonoVacante = '';

		$vacantesDisponibles_error = '';
		$emailVacante_error = '';
		$nombreVacante_error = '';
		$telefonoVacante_error = '';
		$captcha_error = '';

		if(empty($_POST["vacantesDisponibles"])) {
			$vacantesDisponibles_error = 'Selecciona una vacante';
		}
		else {
			$vacantesDisponibles = $_POST["vacantesDisponibles"];
		}

		if(empty($_POST["emailVacante"])) {
			$emailVacante_error = 'El email es requerido';
		}
		else {
			if(!filter_var($_POST["emailVacante"], FILTER_VALIDATE_EMAIL)) {
				$emailVacante_error = 'Email invalido, intenta de nuevo';
			}
			else {
				$emailVacante = $_POST["emailVacante"];
			}
		}
		
		if(empty($_POST["nombreVacante"])) {
			$nombreVacante_error = 'El nombre es requerido';
		}
		else {
			$nombreVacante = $_POST["nombreVacante"];
		}

		if(empty($_POST["telefonoVacante"])) {
			$telefonoVacante_error = 'El telefono es requerido';
		}
		else {
			$telefonoVacante = $_POST["telefonoVacante"];
		}

		if(empty($_POST['g-recaptcha-response'])) {
			$captcha_error = 'Debes completar el Captcha';
		}
		else {
			$captcha = $_POST['g-recaptcha-response'];
			$secret_key = '6LcJvVIaAAAAAMcfEcPdDk-E3xDzbOP4MGba_PPO';
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$captcha");
			$response_data = json_decode($response, TRUE);
			$error = json_encode($response_data);

			if(!$response_data['success']) {
				$captcha_error = $error;
			}
		}

		if($vacantesDisponibles_error == '' && $emailVacante_error == '' && $nombreVacante_error == '' && $telefonoVacante_error == '' && $captcha_error == '') {

	
			$vacante = $_POST['vacantesDisponibles'];
			$correo = $_POST['emailVacante'];
			$nombre = $_POST['nombreVacante'];
			$telefono = $_POST['telefonoVacante']; 
			$urlPortafolio = $_POST['portafolioVacante'];

			date_default_timezone_set("America/Mexico_City");
			$fecha = date('d/m/Y');
			$hora = date('H:i');

			$mail = new PHPMailer(true);		
			$mail->isSMTP();
			$mail->isMail();
			$mail->SMTPDebug = 0;		
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Host = 'smtp.ionos.mx';
			$mail->Port = '587';
		
			$mail->Username = 'noreply@galletamkt.com';
			$mail->Password = 'GalletaMKT77%';

			$mail->setFrom('noreply@galletamkt.com', 'Nueva prospecto para la: '.$vacante.'');

			$mail->AddAddress('rh@galletamkt.com');
			$mail->WordWrap = 50;
	
			$mail->IsHTML(true);
			$mail->addAttachment($_FILES['cv']['tmp_name'], $_FILES['cv']['name']);
			$mail->CharSet = 'UTF-8';
			$mail->Subject = 'Vacante '.$vacante.'';
			$mail->Body = '
			<h3 align="center">Detalles del solicitante</h3>
			<p>Fecha y hora de contacto: '.$fecha.' '.$hora.'</p>
			<table border="1" width="100%" cellpadding="5" cellspacing="5">
				<tr>
					<td width="30%">Vacante solicitada</td>
					<td width="70%">'.$vacante.'</td>
				</tr>
				<tr>
					<td width="30%">Nombre</td>
					<td width="70%">'.$nombre.'</td>
				</tr>
				<tr>
					<td width="30%">Email</td>
					<td width="70%">'.$correo.'</td>
				</tr>
				<tr>
					<td width="30%">Telefono</td>
					<td width="70%">'.$telefono.'</td>
				</tr>
				<tr>
					<td width="30%">URL portafolio</td>
					<td width="70%">'.$urlPortafolio.'</td>
				</tr>
			</table>
			';

			if($mail->send()) {
				$data = array(
					'success' => true
				);
			}
			else {
				$data = array(
					'success' => false
				);
				// unlink($final_file);
			}
		}
		else {
			$data = array(
				'vacantesDisponibles_error' => $vacantesDisponibles_error,
				'emailVacante_error' => $emailVacante_error,
				'nombreVacante_error' => $nombreVacante_error,
				'telefonoVacante_error'  => $telefonoVacante_error,
				'captcha_error'  => $captcha_error
			);
		}
		echo json_encode($data);
	}

?>