<?php
    require '../config/connection.php';
    require '../config/funciones.php';

    $errors = array();

	if(!empty ($_POST))
	{
		$name = $conn->real_escape_string($_POST['name']);
		$last_name = $conn->real_escape_string($_POST['last_name']);
		$company = "GalletaMKT";
		$email = $conn->real_escape_string($_POST['email']);
		$password = $conn->real_escape_string($_POST['password']);
		$r_password = $conn->real_escape_string($_POST['r_password']);

		$code = rand(999999, 111111);
		$status = 'notverified';
		$roles = 2;
		
		if(isNull($name, $last_name, $email, $company, $password, $r_password)) {
			$errors[] = "You must fill all the fields";
		}

		if(!isEmail($email)) {
			$errors[] = "Invalid email address";
		}

		if(!validaPassword($password, $r_password)) {
			$errors[] = "Passwords do not match";
		}

		if(emailExiste($email)) {
			$errors[] = "The email $email already exists";
		}

		if(count($errors) == 0) {
			$pass_hash = hashPassword($password);
			
			$record = registraUsuario($name, $last_name, $company, $email, $pass_hash, $code, $status, $roles);
			
			if($record > 0) {
					$subject = "Email Verification Code";
					$message = "Your verification code is $code";
					$sender = "From: devgmkt@galletamkt.com";
					if(mail($email, $subject, $message, $sender)){
						$info = "We've sent a verification code to your email - $email";
                        $_SESSION['info'] = $info;
						$_SESSION['email'] = $email;
						$_SESSION['password'] = $password;
						echo "<script>window.location.href='code-verification.php';</script>";
                        exit;
					}
					else {
						$errors[] = "Failed while sending code!";
					}
			}
			else {
				$errors[] = "There was an error registering. Try again!";
			}
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
    <title>Registro</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../assets/img/.svg" type="image/x-icon">
    <link rel="icon" href="../assets/img/.svg" type="image/x-icon">
</head>

<body id="">
    <div class="container">
        <div class="form login-form mx-auto">
            <div class="row mb-3">
                <img class="mx-auto" src="../assets/logos/galleta-logo-2.svg" width="200" height="50" alt="">
            </div>

            <form action="" method="post">
                <h4 class="text-center">Registrate</h4>

                <div class="form-group">
                    <label for="name" class="form-label">Nombre</label>
                    <input class="form-input" type="text" placeholder=" " name="name" id="name"
                        value="<?php echo $name ?>">
                </div>

                <div class="form-group">
                    <label for="last_name" class="form-label">Apellido</label>
                    <input class="form-input" type="text" placeholder=" " name="last_name" id="last_name"
                        value="<?php echo $last_name ?>">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Correo</label>
                    <input class="form-input" type="email" placeholder=" " name="email" id="email"
                        value="<?php echo $email ?>">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="password" class="form-label">Contraseña</label>
                            <input class="form-input" type="password" placeholder=" " name="password" id="password">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="r_password" class="form-label">Repite tu contraseña</label>
                            <input class="form-input" type="password" placeholder=" " name="r_password" id="r_password">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button class="form-control btn btn-primary" type="submit" name="submit">Registrarse</button>
                </div>

                <div class="contenido-form">
                    <div class="link login-link text-center">¿Ya tienes una cuenta? <a href="login.php">Inicia Sesion</a>
                    </div>
                </div>
                <?php echo resultBlock($errors); ?>
            </form>
        </div>

    </div>
    <!-- <div class="container">
        <div class="form login-form mx-auto">
            <form action="" method="post">
                <h3 class="text-center">Sign Up</h3>

                <div class="">
                    <div class="form-group">
                        <label for="name" class="form-label">Nombre</label>
                        <input class="form-input" type="text" placeholder=" " name="name" id="name"
                            value="<?php echo $name ?>">
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="form-label">Apellido</label>
                        <input class="form-input" type="text" placeholder=" " name="last_name" id="last_name"
                            value="<?php echo $last_name ?>">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Correo</label>
                        <input class="form-input" type="email" placeholder=" " name="email" id="email"
                            value="<?php echo $email ?>">
                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password" class="form-label">Contraseña</label>
                                <input class="form-input" type="password" placeholder=" " name="password" id="password">
                            </div>


                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="r_password" class="form-label">Repite tu contraseña</label>
                                <input class="form-input" type="password" placeholder=" "
                                    name="r_password" id="r_password">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <button class="form-input btn btn-primary" type="submit" name="submit" value="Registrarse">Sign
                            up</button>
                    </div>
                </div>

                <div class="contenido-form">
                    <div class="link login-link text-center">Already have an account? <a href="login.php">Sign
                            in</a></div>
                </div>
                <?php echo resultBlock($errors); ?>
            </form>
        </div>
    </div> -->

    <!-- <button href="#" class="btn btn-secondary btn-circle btn-md" data-toggle="modal" data-target="#faqloginModal"><i
				class="fas fa-question-circle"></i></button> -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/appLogin.js"></script>

    <?php include_once '../includes/modals.php'; ?>
</body>

</html>