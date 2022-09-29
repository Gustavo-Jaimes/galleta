<?php 

    require '../config/connection.php';
    require '../config/funciones.php';

    if(!isset($_SESSION['email'])) {
        header('Location: login');
    }

    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

        if(isNullPass($password, $cpassword)) {
            $errors[] = "You must fill all the fields!";
        }
        
        else {
            if(validaPassword($password, $cpassword)) {
                $code = 0;
                $email = $_SESSION['email'];
                $encpass = password_hash($password, PASSWORD_BCRYPT);
                $update_pass = "UPDATE users SET code = $code, password = '$encpass' WHERE email = '$email'";
                $run_query = mysqli_query($conn, $update_pass);
                if($run_query){
                    $info = "Your password changed. Now you can login with your new password.";
                    $_SESSION['info'] = $info;
                    unset($_SESSION['email']);
                    header('Location: login?changed');
                    exit;
                }else{
                    $errors[] = "Failed to change your password!";
                }
            }
            else {
                $errors[] = "Passwords do not match!";
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
    <title>Create a New Password</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="https://kit.fontawesome.com/1d7dc8a672.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../assets/img/.svg" type="image/x-icon">
    <link rel="icon" href="../assets/img/.svg" type="image/x-icon">
</head>

<body>

    <div class="logo">
        <div class="col-md-6">
            <img src="../assets/images/logos/logo-quick-estimates.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4 form login-form">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <h2 class="text-center">Change Passwords</h2>
                    <?php 
                    if($_SESSION['info'] != ""){
                        ?>
                    <div class="alert alert-success text-center">
                        <?php echo $_SESSION['info']; ?>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-input" type="password" name="password" placeholder="Create new password">
                    </div>
                    <div class="form-group">
                        <input class="form-input" type="password" name="cpassword" placeholder="Confirm your password">
                    </div>
                    <div class="form-group">
                        <input class="form-input btn btn-primary" type="submit" name="change-password" value="Change">
                    </div>
                    <?php echo resultBlock($errors); ?>
                </form>
            </div>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/appLogin.js"></script>
</body>

</html>