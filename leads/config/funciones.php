<?php
	session_start();

	// 	Validaciones de formularios
	function isNull($name, $last_name, $email, $name_comp, $pass, $pass_con)
	{
		if(strlen(trim($name)) < 1 || strlen(trim($last_name)) < 1 || strlen(trim($name_comp)) < 1 || strlen(trim($email)) < 1 || strlen(trim($pass)) < 1 || strlen(trim($pass_con)) < 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function isNullPass($pass, $pass_con)
	{
		if(strlen(strlen(trim($pass)) < 1 || strlen(trim($pass_con)) < 1))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function isEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function validaPassword($var1, $var2)
	{
		if (strcmp($var1, $var2) !== 0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	function minMax($min, $max, $valor)
	{
		if(strlen(trim($valor)) < $min)
		{
			return true;
		}
		else if(strlen(trim($valor)) > $max)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function emailExiste($email)
	{
		global $conn;

		$stmt = $conn->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();

		if ($num > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	// generar token
	function generateToken()
	{
		$gen = md5(uniqid(mt_rand(), false));
		return $gen;
	}

// Hashear contraseña
	function hashPassword($password)
	{
		$hash = password_hash($password, PASSWORD_BCRYPT);
		return $hash;
	}

	// Mostrar errores
	function resultBlock($errors)
	{
		if(count($errors) > 0)
		{
			echo "<div class='alert alert-danger alert-dismissible fade show mt-5 mx-auto' role='alert'>";
			echo "<ul>";
			foreach($errors as $error)
			{
				echo "<li><strong>".$error."</strong></li>";
			}
			echo "</ul>";
					echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>";

			echo "</div>";
		}
	}

	// Registrar usuarios
	function registraUsuario($name, $last_name, $name_company, $email, $pass_hash, $code, $active, $type_user)
	{

		global $conn;

		$stmt = $conn->prepare("INSERT INTO users (name, last_name, company, email, password, code, status, roles) VALUES(?,?,?,?,?,?,?,?)");
		$stmt->bind_param('sssssisi', $name, $last_name, $name_company, $email, $pass_hash, $code, $active, $type_user);

		if ($stmt->execute())
		{
			return $conn->insert_id;
		}
		else
		{
			return 0;
		}
	}

	// Enviar email activacion
	function enviarEmail($email, $name, $asunto, $cuerpo){
	
		require_once '../PHPMailer/src/PHPMailer.php';
		require_once '../PHPMailer/src/SMTP.php';

		$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->isSMTP();
		$mail->isMail();
     	$mail->CharSet="UTF-8";
		$mail->SMTPDebug = 2;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Host = "smtp.1and1.com";
		$mail->Port = '25';

		$mail->Username = 'devgmkt@galletamkt.com';
		$mail->Password = 'GalletaMKT77%';

		$mail->setFrom('devgmkt@galletamkt.com', 'GalletaMKT');
		$mail->addAddress($email, $name);

		$mail->Subject = $asunto;
		$mail->Body    = $cuerpo;
		$mail->IsHTML(true);

		if($mail->send())
		return true;
		else
		return false;
	}


	function validaIdToken($id, $token){
		global $conn;

		$stmt = $conn->prepare("SELECT status FROM users WHERE id = ? AND token = ? LIMIT 1");
		$stmt->bind_param("is", $id, $token);
		$stmt->execute();
		$stmt->store_result();
		$rows = $stmt->num_rows;

		if($rows > 0)
		{
			$stmt->bind_result($status);
			$stmt->fetch();

			if($status == 'verified')
			{
				$msg = "La cuenta ya se activo anteriormente.";
			}
			else
			{
				if(activarUsuario($id))
				{
					$msg = 'Cuenta activada.';
				}
					else
					{
						$msg = 'Error al Activar Cuenta';
					}
			}
		}
		else
		{
			$msg = 'No existe el registro para activar.';
		}
		return $msg;
	}

	function activarUsuario($id)
	{
		global $conn;

		$stmt = $conn->prepare("UPDATE users SET status = 'verified' WHERE id = ?");
		$stmt->bind_param('s', $id);
		$result = $stmt->execute();
		$stmt->close();
		return $result;
	}

//Login
	function isNullLogin($email, $password)
	{
		if(strlen(trim($email)) < 1 || strlen(trim($password)) < 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function login($email, $password)
	{
		global $conn;

		$stmt = $conn->prepare("SELECT id, roles, password FROM users WHERE name = ? || email = ? LIMIT 1");
		$stmt->bind_param("ss", $email, $email);
		$stmt->execute();
		$stmt->store_result();
		$rows = $stmt->num_rows;

		if($rows > 0)
		{
			if(isActivo($email))
			{

				$stmt->bind_result($id, $roles, $passwd);
				$stmt->fetch();

				$validaPassw = password_verify($password, $passwd);

				if($validaPassw)
				{
						lastSession($id);
						$_SESSION['id_usuario'] = $id;
						$_SESSION['type_user'] = $roles;

						header("location: ../index.php");
				}
					else
					{
						$errors = "The password is incorrect.";
					}
				}
					else
					{
						$info = "It's look like you haven't still verify your email - $email";
						$_SESSION['info'] = $info;
						echo "<script>window.location.href='code-verification.php';</script>";
					}
		}
		else
		{
			$errors = "Email address does not exist!";
		}
		return $errors;
	}

	// Ultima session
	function lastSession($id)
	{
		global $conn;

		$stmt = $conn->prepare("UPDATE users SET last_session=NOW(), token_password='', password_request=1 WHERE id = ?");
		$stmt->bind_param('s', $id);
		$stmt->execute();
		$stmt->close();
	}

	// Verificar si esta activo
	function isActivo($email)
	{
		global $conn;

		$stmt = $conn->prepare("SELECT status FROM users WHERE email = ? LIMIT 1");
		$stmt->bind_param('s', $email);
		$stmt->execute();
		$stmt->bind_result($status);
		$stmt->fetch();

		if ($status == 'verified')
		{
			return true;
		}
		else
		{
			return false;

			// echo "ERROR: ".mysqli_error($conn);
		}
	}

	//////////////////////////////////////////

	function generaTokenPass($user_id)
	{
		global $conn;

		$token = generateToken();

		$stmt = $conn->prepare("UPDATE users SET token_password=?, password_request=1 WHERE id = ?");
		$stmt->bind_param('ss', $token, $user_id);
		$stmt->execute();
		$stmt->close();

		return $token;
	}

	function getValor($campo, $campoWhere, $valor)
	{
		global $conn;

		$stmt = $conn->prepare("SELECT $campo FROM users WHERE $campoWhere = ? LIMIT 1");
		$stmt->bind_param('s', $valor);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;

		if ($num > 0)
		{
			$stmt->bind_result($_campo);
			$stmt->fetch();
			return $_campo;
		}
		else
		{
			return null;
		}
	}

	function getPasswordRequest($id)
	{
		global $conn;

		$stmt = $conn->prepare("SELECT password_request FROM users WHERE id = ?");
		$stmt->bind_param('i', $id);
		$stmt->execute();
		$stmt->bind_result($_id);
		$stmt->fetch();

		if ($_id == 1)
		{
			return true;
		}
		else
		{
			return null;
		}
	}

	function verificaTokenPass($user_id, $token)
	{

		global $conn;

		$stmt = $conn->prepare("SELECT status FROM users WHERE id = ? AND token_password = ? AND password_request = 1 LIMIT 1");
		$stmt->bind_param('is', $user_id, $token);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;

		if ($num > 0)
		{
			$stmt->bind_result($status);
			$stmt->fetch();
			if($status == 'verified')
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	function cambiaPassword($password, $user_id, $token)
	{

		global $conn;

		$stmt = $conn->prepare("UPDATE users SET password = ?, token_password='', password_request=0 WHERE id = ? AND token_password = ?");
		$stmt->bind_param('sis', $password, $user_id, $token);

		if($stmt->execute())
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	// function cambiaPasswordPerfil($password){

	// 	global $conn;

	// 	$stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = '".$_SESSION['id_usuario']."'");
	// 	$stmt->bind_param('s', $password);

	// 	if($stmt->execute())
	// 	{
	// 		return true;
	// 		}
	// 		else
	// 		{
	// 		return false;
	// 	}
	// }


	function normalizar ($cadena)
  {
    $cadena = str_replace(
    array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
    array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
    $cadena
    );

    //Reemplazamos la E y e
    $cadena = str_replace(
    array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
    array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
    $cadena );

    //Reemplazamos la I y i
    $cadena = str_replace(
    array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
    array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
    $cadena );

    //Reemplazamos la O y o
    $cadena = str_replace(
    array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
    array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
    $cadena );

    //Reemplazamos la U y u
    $cadena = str_replace(
    array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
    array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
    $cadena );

    //Reemplazamos la N, n, C y c
    $cadena = str_replace(
    array('Ñ', 'ñ', 'Ç', 'ç'),
    array('N', 'n', 'C', 'c'),
    $cadena );

    return $cadena;
  }
  
  function formatBytes($size, $precision = 2)
  {
	  $base = log($size, 1024);
	  $suffixes = array('', 'K', 'M', 'G', 'T');

	  return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
  }