<?php
    session_start();

    require '../config/connection.php';
    require '../config/funciones.php';

	if(isset($_SESSION["id_usuario"]))
	{
		header("Location: ../index.php");
	}

    $errors = array();

    if (!empty($_POST)) {
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        if(isNullLogin($email, $password))
        {
            $errors[] = "You must fill all the fields!";
        }

        $errors[] = login($email, $password);
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
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="https://kit.fontawesome.com/1d7dc8a672.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../assets/img/.svg" type="image/x-icon">
    <link rel="icon" href="../assets/img/.svg" type="image/x-icon">
</head>

<body id="">
    <div class="container">
        <div class="form login-form mx-auto">
            <div class="row mb-3">
                <img class="mx-auto" src="../assets/logos/galleta-logo-2.svg" width="200" height="50" alt="">
            </div>
            <h4 class="text-center">Inicia sesion</h4>

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <?php if (isset($_GET['closed'])): ?>
                <div class="sesion-cerrada alert alert-success alert-dismissible fade show mt-5" role="alert">
                    <strong>Good Bye!</strong> The session has been successfully closed. We hope to see you very
                    soon.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>

                <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    <strong>Great!</strong> The registration was completed successfully. Now you can log in.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>

                <?php if (isset($_GET['changed'])): ?>
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    <strong>Great!</strong> Your password changed. Now you can login with your new password.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="email" class="form-label">Correo</label>
                    <input class="form-input" type="email" placeholder=" " name="email" id="email">
                </div>

                <div class="row no-gutters">
                    <div class="col">
                        <div class="form-group">
                            <label for="password" class="form-label">Contraseña</label>
                            <input class="form-input" type="password" placeholder=" " name="password" id="password">
                        </div>
                    </div>
                    <div class="col-auto">
                        <span class="btn span-eye"><i class="fa fa-eye" id="icon-eye"></i></span>
                    </div>
                </div>

                <div class="d-flex align-items-baseline mb-2">
                    <div class="link ml-auto"><a href="forgot-password.php">¿Olvidaste la contraseña?</a></div>
                </div>

                <div class="form-group">
                    <button class="form-control btn btn-primary" type="submit">Inicia sesion</button>
                </div>

                <div class="contenido-form">
                    <div class="link login-link text-center">¿Aun no tienes una cuenta? <a href="register.php">Registrate</a></div>
                </div>
                <?php echo resultBlock($errors); ?>
            </form>
        </div>

    </div>
    <!-- <button href="#" class="btn btn-secondary btn-circle btn-md" data-toggle="modal" data-target="#faqloginModal"><i
                class="fas fa-question-circle"></i></button> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/appLogin.js"></script>

    <script>
    // See Paswword
    var myInput = document.getElementById('password'),
        myIcon = document.getElementById('icon-eye');

    myInput.onfocus = function() {
        myIcon.style.right = '3px'
    }

    myInput.onblur = function() {
        myIcon.style.right = '14px'
    }

    myIcon.onclick = function() {

        if (myIcon.classList.contains('fa-eye')) {
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
            myInput.setAttribute('type', 'text');
        } else {
            myInput.setAttribute('type', 'password');
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        };
    }
    </script>

    <?php include_once '../includes/modals.php'; ?>
</body>

</html>