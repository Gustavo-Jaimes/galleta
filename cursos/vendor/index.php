<?php

//check if form was sent
if($_POST){

	$to = 'egutierrez@galletamkt.com';
	
	$subject = 'Información de cursos';
	$name = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];




        //$contenido = "Nombre Completo: " . $name ."\nE-mail: " . $email . "\nTelefono: " . $telefono .  "\nModelo: " . $auto;
       $contenido = "Nombre Completo: " . $name ."\nE-mail: " . $email . "\nTelefono: " . $telefono .  "\nMensaje: " . $mensaje;


	//honey pot field
	$honeypot = $_POST['firstname'];

	//check if the honeypot field is filled out. If not, send a mail.
	if( ! empty( $honeypot ) ){
		return; //you may add code here to echo an error etc.
	}else{
	    
		mail( $to, $subject, $contenido);
		echo'<script type="text/javascript">
    alert("Formulario enviado correctamente, nos pondremos en contacto lo antes posible");
    window.location.href="index.php";
    </script>';
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cursos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" href="../assets/images/favicon.png">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/88f4b8bc1d.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <style>
    .hide-robot {
        display: none;
    }

    .card-custom {
        overflow: hidden;
        min-height: 450px;
        box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
    }

    .card-custom-img {
        height: 200px;
        min-height: 200px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        border-color: inherit;
    }

    /* First border-left-width setting is a fallback */
    .card-custom-img::after {
        position: absolute;
        content: '';
        top: 161px;
        left: 0;
        width: 0;
        height: 0;
        border-style: solid;
        border-top-width: 40px;
        border-right-width: 0;
        border-bottom-width: 0;
        border-left-width: 545px;
        border-left-width: calc(575px - 5vw);
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: inherit;
    }

    .card-custom-avatar img {
        border-radius: 50%;
        box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
        position: absolute;
        top: 100px;
        left: 1.25rem;
        width: 100px;
        height: 100px;
    }
    </style>
</head>


<body>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/LANDING.png" alt="First slide">
    </div>
  </div>
</div>
        <div class="container" style="background-color: #fff;"> 
            <div class="row pt-5 m-auto">
                <div class="col-md-6 col-lg-4 pb-3">

                    <!-- Copy the content below until next comment -->
                    <div class="card card-custom bg-white border-white border-0 h-100">
                        <div class="card-custom-img"
                            style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);">
                        </div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid"
                                src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg"
                                alt="Avatar" />
                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-title">Facebook</h4>
                            <ul>
                                <li>✔ Facebook para empresas</li>
                                <li>✔ Contenido estratégico</li>
                                <li>✔ Facebook como herramienta de venta</li>
                                <li>✔ Facebook Ads (primeros pasos) para generar prospectos de calidad</li>
                                <li>✔ Como medir el retorno de inversión</li>
                                <li>✔ Mensajes de respuesta automáticos</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Copy until here -->


                </div>
                <div class="col-md-6 col-lg-4 pb-3">

                    <!-- Copy the content below until next comment -->
                    <div class="card card-custom bg-white border-white border-0 h-100">
                        <div class="card-custom-img"
                            style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);">
                        </div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid"
                                src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg"
                                alt="Avatar" />
                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-title">Instagram</h4>
                            <ul>
                                <li>✔ Instagram para empresas</li>
                                <li>✔ Generar contenido de valor</li>
                                <li>✔ Convierte seguidores a clientes</li>
                                <li style="visibility: hidden;">✔ Facebook Ads (primeros pasos) para generar prospectos
                                    de calidad</li>
                                <li style="visibility: hidden;">✔ Como medir el retorno de inversión</li>
                                <li style="visibility: hidden;">✔ Mensajes de respuesta automáticos</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Copy until here -->


                </div>
                <div class="col-md-6 col-lg-4 pb-3">

                    <!-- Copy the content below until next comment -->
                    <div class="card card-custom bg-white border-white border-0  h-100">
                        <div class="card-custom-img"
                            style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);">
                        </div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid"
                                src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg"
                                alt="Avatar" />
                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-title">WhatsApp Business</h4>
                            <ul>
                                <li>✔ Beneficios de WhatsApp Business</li>
                                <li>✔ Como configurar WhatsApp Business</li>
                                <li>✔ Etiquetas</li>
                                <li>✔ Mensajes automatizados</li>
                                <li>✔ Como conectar tus campañas de Facebook a WhatsApp Business</li>

                            </ul>
                        </div>
                    </div>
                    <!-- Copy until here -->


                </div>
                </div>
                <div class="row pt-5 ">
                <div class="col-md-6 col-lg-4 pb-3 mx-auto">

                    <!-- Copy the content below until next comment -->
                    <div class="card card-custom bg-white border-white border-0 h-100">
                        <div class="card-custom-img"
                            style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);">
                        </div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid"
                                src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg"
                                alt="Avatar" />
                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-title">Facebook & Instagram ADS</h4>
                            <ul>
                                <li>✔ Creación de anuncios</li>
                                <li>✔ Objetivo correcto</li>
                                <li>✔ Segmentación correcta</li>
                                <li>✔ lanzar una campaña</li>
                                <li>✔ Optimizaciones</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Copy until here -->
                </div>
                <div class="col-md-6 col-lg-4 pb-3 mx-auto">

                    <!-- Copy the content below until next comment -->
                    <div class="card card-custom bg-white border-white border-0 h-100">
                        <div class="card-custom-img"
                            style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);">
                        </div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid"
                                src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg"
                                alt="Avatar" />
                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-title">Mailing</h4>
                            <ul>
                                <li>✔ Herramientas para correos masivos</li>
                                <li>✔ Como generar una campaña</li>
                                <li>✔ Métricas y conversiones</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Copy until here -->


                </div>
                </div>

            
        </div>

    <div class="contact1" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">

        <div class="container-contact1">
            <div class="contact1-pic js-tilt">
                <img src="images/galleta_logo.png" alt="IMG">
            </div>

            <form class="contact1-form validate-form" method="post" action="#my-form" id="my-form">
                <span class="contact1-form-title">
                    Solicitar información
                </span>

                <div class="wrap-input1 validate-input" data-validate="Name is required">
                    <input class="input1" type="text" name="nombre" placeholder="Nombre">
                    <span class="shadow-input1"></span>
                </div>
                <!-- Create fields for the honeypot -->
                <input name="firstname" type="text" id="firstname" class="hide-robot">
                <!-- honeypot fields end -->
                <div class="wrap-input1 validate-input" data-validate="Name is required">
                    <input class="input1" type="telefono" name="telefono" placeholder="Teléfono">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input1" type="text" name="email" placeholder="Correo electrónico">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Message is required">
                    <textarea class="input1" name="mensaje" placeholder="Mensaje"></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn">
                        <span>
                            Enviar
                            <i class="fas fa-paper-plane"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>