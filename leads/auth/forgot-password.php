<?php

	require '../config/connection.php';
	require '../config/funciones.php';

	session_start();

	if(isset($_SESSION["id_usuario"])) {
		header("Location: login");
	}

	$errors = array();

	if(!empty($_POST))
	{
		$email = $conn->real_escape_string($_POST['email']);

		if(!isEmail($email))
		{
			$errors[] = "Debe ingresar un correo electronico valido";
		}

		if(emailExiste($email))
		{
			$code = rand(999999, 111111);

            $insert_code = "UPDATE users SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);

            if($run_query) {
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: shahiprem7890@gmail.com";

                if(mail($email, $subject, $message, $sender)) {
                    $info = "Enviamos el codigo para restablecer tu contraseña a tu correo electronico - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset');
                    exit;
                }
				else{
                    $errors[] = "Failed while sending code!";
                }
            }
			else {
                $errors[] = "Something went wrong!";
            }
		}
		else {
			$errors[] = "Email address does not exist!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Arturo Cuevas">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Olvide la contraseña</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="https://kit.fontawesome.com/1d7dc8a672.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../assets/img/.svg" type="image/x-icon">
    <link rel="icon" href="../assets/img/.svg" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="form login-form mx-auto">
            <h4 class="text-center">Olvide la contraseña</h4>
            <p class="text-center">Introduce tu correo</p>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="form-group">
                    <label for="email" class="form-label">Enter email address</label>
                    <input class="form-input" type="email" placeholder=" " name="email" id="email" value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-primary" type="submit" name="check-email" value="Continue">
                </div>
                <?php echo resultBlock($errors); ?>

            </form>
        </div>
    </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/appLogin.js"></script>

</body>

</html>