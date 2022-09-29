<?php 
    require '../config/connection.php';
    require '../config/funciones.php';

    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);

        $check_code = "SELECT * FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);

        if(mysqli_num_rows($code_res) > 0) {
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];

            $code = 0;
            $status = 'verified';

            $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($conn, $update_otp);

            if($update_res) {
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                echo "<script>window.location.href='login?success';</script>";
                exit();
            }
            else{
                $errors[] = "Failed while updating code!";
            }
        }
        else{
            $errors[] = "You've entered incorrect code!";
        }
    }

    // $email = $_SESSION['email'];
    // // var_dump($email);
    // if($email == false){
    //     header('Location: login.php');
    // }

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
    <title>Codigo de verificación</title>
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
            <h4 class="text-center">Codigo de verificación</h4>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <?php
                    if(count($errors) > 0){
                        ?>
                <div class="alert alert-danger text-center">
                    <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                </div>
                <?php
                    }
                    ?>
                <div class="form-group">
                    <label for="otp" class="form-label">Introduce el codigo</label>
                    <input class="form-input" type="number" name="otp" id="otp" placeholder=" ">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-primary" type="submit" name="check" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/appLogin.js"></script>
</body>

</html>