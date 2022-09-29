<?php

    require '../config/connection.php';
	require '../config/funciones.php';

    if(!isset($_SESSION['email'])) {
        header('Location: login');
    }

    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";

        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        
        $check_code = "SELECT * FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);

        if(mysqli_num_rows($code_res) > 0) {

            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;

            $info = "Please create a new password.";
            $_SESSION['info'] = $info;
        
            header('location: new-password?email='.$email.'');
            exit();
        }else{
            $errors[] = "You've entered incorrect code!";
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
    <title>Code Verification</title>
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
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <h4 class="text-center">Codigo de verificación</h4>
                <?php 
                    if($_SESSION['info'] != ''){
                        ?>
                <div class="alert alert-success text-center">
                    <?php echo $_SESSION['info']; ?>
                </div>
                <?php
                    }
                    ?>
                <div class="form-group">
                    <label for="otp" class="form-label">Introduce el codigo</label>
                    <input class="form-input" type="number" name="otp" placeholder=" ">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-primary" type="submit" name="check-reset-otp" value="Submit">
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