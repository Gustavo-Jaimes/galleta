<!-- <?php
    $name = stripslashes($_POST["name"]);
	$mail = stripslashes($_POST["mail"]);
    $phone = stripslashes($_POST["phone"]);
	$texto = stripslashes($_POST["texto"]);
 
	$recaptcha = $_POST["g-recaptcha-response"];
 
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'header' => "Content-Type: application/x-www-form-urlencoded\r\n", 
		'secret' => '6LcJvVIaAAAAAMcfEcPdDk-E3xDzbOP4MGba_PPO',
		'response' => $recaptcha
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success) {
		
        if($_POST){
            $to = 'mflores@galletamkt.com, vgaribay@galletamkt.com, leads@galletamkt.com';
            
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $mail = $_POST['mail'];
            $texto = $_POST['texto'];
            $subject = "PRODUCT SHOT Fotografia de alimentos";
            $contenido = "Hola, necesito realizar una cotizacion sobre fotografia de alimentos. Este mensaje fue enviado por: " . $name ."\nE-mail: " . $mail . "\nWhatsapp: " . $phone .  "\nDetalles del proyecto: " . $texto;
            //honey pot field
            $honeypot = $_POST['firstname'];
            //check if the honeypot field is filled out. If not, send a mail.
            if( ! empty( $honeypot ) ){
                return; //you may add code here to echo an error etc.
            }else{
            
                mail( $to, $subject, $contenido);
                echo'<script type="text/javascript">
            alert("Formulario enviado correctamente, Gracias por ponerte en contacto con nosotros.");
            window.location.href="product-shot.php";
            </script>';
            }
        }	
	} 
    //check if form was sent
    
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description"
        content="Fotografía de alimentos profesional para publicidad, restaurantes y bares. Fotografía gastronómica. Platillos y bebidas. Guadalajara, México.">
    <meta name="keywords"
        content="Fotografía para restaurantes en Guadalajara, Fotos para restaurante, fotos para menu de restaurante, fotos de platillos de comida, publicidad para restaurantes, videos para restaurantes, sesion de fotos para menu de comida. Galleta Marketing Digital, agencia de marketing digital, agencia de fotografia.">
    <title>Sesión de fotos para restaurantes</title>

    <link rel="icon" href="assets/images/favicon.png">
    <!-- Core Style Sheets -->
    <link rel="preload" href="assets/css/master.css" as="styles">
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/wp.css">
    <link rel="stylesheet" href="assets/css/tel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css"
        integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">

    <!-- <link rel="preload" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" as="styles">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->


    <!-- Responsive Style Sheets -->
    <link rel="preload" href="assets/css/responsive.css" as="styles">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
    .gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-auto-rows: 500px;
        padding: 20px;
        gap: 2px;
    }

    .gallery_img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .gallery-item:nth-child(1) {
        grid-row-start: span 2;
    }

    .gallery-item:nth-child(2) {
        grid-row-start: span 1;
    }

    .gallery-item:nth-child(3) {
        grid-row-start: span 2;
    }

    .gallery-item:nth-child(4) {
        grid-row-start: span 2;
    }

    .gallery-item:nth-child(5) {
        grid-row-start: span 1;
    }

    .gallery-item:nth-child(6) {
        grid-row-start: span 1;
    }

    .gallery-item:nth-child(7) {
        grid-row-start: span 2;
    }

    .gallery-item:nth-child(8) {
        grid-row-start: span 1;
    }

    .gallery-item:nth-child(9) {
        grid-row-start: span 2;
    }

    .gallery-item:nth-child(10) {
        grid-row-start: span 2;
    }

    .gallery-item:nth-child(11) {
        grid-row-start: span 1;
    }

    .gallery-item:nth-child(12) {
        grid-row-start: span 1;
    }
/* Nuevo */
    .paquete .container{
        width: 30rem; 
        height: 25rem; 
        padding: 0; border: none;  
    }
    .paquete .container .letrero{
        font-family: 'Montserrat', sans-serif; 
        padding: 1em 0; 
        font-weight: bold; font-size: 2.5rem;
    }
    .paquete .container h1{
        font-size: 3.5rem; 
        font-weight: bold; 
        margin: 0;
    }
    .paquete .container .fotos{
        padding: 3em; 
        font-family: 'Montserrat', sans-serif;
    }
    .condiciones{
        padding: 3em 0 ; 
        background-color: white; 
        font-size: 1.5em;
    }
    

    @media(max-width:768px) {
        .gallery {

            grid-template-columns: repeat(1, 1fr);

        }

        .gallery_img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-item:nth-child(1) {
            grid-row-start: span 1;
        }

        .gallery-item:nth-child(2) {
            grid-row-start: span 1;
        }

        .gallery-item:nth-child(3) {
            grid-row-start: span 1;
        }

        .gallery-item:nth-child(4) {
            grid-row-start: span 1;
        }

        .gallery-item:nth-child(5) {
            grid-row-start: span 1;
        }

        .gallery-item:nth-child(6) {
            grid-row-start: span 1;
        }

        .gallery-item:nth-child(7) {
            grid-row-start: span 1;
        }

        .gallery-item:nth-child(8) {
            grid-row-start: span 1;
        }

        .gallery-item:nth-child(9) {
            grid-row-start: span 1;
        }

        .gallery-item:nth-child(10) {
            grid-row-start: span 1;
        }

        .gallery-item:nth-child(11) {
            grid-row-start: span 1;
        }

        .gallery-item:nth-child(12) {
            grid-row-start: span 1;
        }
        .condiciones{
        font-size: .7em;
        }
    }
    </style>
</head>


<body>
        <!-- wpp-btn-mobile -->
        <div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style=""><a id="WhatsApp-button" href="https://wa.link/fv4uxq" target="_blank" class="phoneJs" title="WhatsApp 360imagem">
            <div class="cbh-ph-circle"></div>
            <div class="cbh-ph-circle-fill"></div>
            <div class="cbh-ph-img-circle1"></div>
        </a>
    </div>

    <!-- wpp-btn-mobile -->
    <div class="phone-call-1 cbh-phone-1 cbh-green-1 cbh-show-1  cbh-static-1" id="clbh_phone_div" style=""><a id="WhatsApp-button" href="tel:+523332606867" target="_blank" class="phoneJs">
            <div class="cbh-ph-circle-1"></div>
            <div class="cbh-ph-circle-fill-1"></div>
            <div class="cbh-ph-img-circle-1"></div>
        </a></div>
    <!-- wpp-btn-mobile -->

    <!--== Loader Start ==-->
    <div id="loader-overlay">
        <div class="loader">
            <img src="assets/images/loader.svg" width="80" alt="">
        </div>
    </div>
    <!--== Loader End ==-->

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        <!--== Header Start ==-->
        <?php
        include "includes/menu-header.php";
        ?>
        <!--== Header End ==-->

        <!--== Hero Slider Start ==-->
        <section class="parallax-bg fixed-bg view-height-100vh lg-section"
            data-parallax-bg-image="assets/images/slides/BANNER.jpg" data-parallax-speed="0.5"
            data-parallax-direction="up" id="home">
            <div class="hero-text-wrap xxl-screen transparent-bg">
                <div class="hero-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 centerize-col">
                                <div class="all-padding-50 text-center white-color">
                                    <h1 class="font-700">
                                        PRODUCT SHOT
                                    </h1>
                                    <hr
                                        style="border: 2px solid #fff;background-color:#fff; width:70%; border-radius: 0">
                                    <h4 class="font-200">
                                        Fotografía de alimentos.
                                    </h4>
                                    <!-- <h1 class="font-700">Métele <span class="text-bottom-line">Galleta</span> a tu
                                        empresa</h1>
                                    <a class="btn btn-lg btn-light btn-rounded mt-20" data-toggle="modal" data-target="#mimodalejemplo">Iniciemos tu proyecto</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Hero Slider End ==-->

        <!--== What We Offer Start ==-->
        <section class="white-bg" id="feature">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-sm-8 centerize-col">
                        <div class="section-title text-center">
                            <h3 class="cardo-font">¿Quieres el mejor contenido visual y tener mayor presencia en apps de
                                delivery
                                o contenido en medios digitales?</h3>
                            <h3 class="cardo-font">Contamos con soluciones para cada necesidad de tu empresa.</h3>
                        </div>
                    </div>
                </div>

                <div class="gallery hover03">
                    <div class="gallery-item">
                        <a href="product-shot/DSC05270.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC05270.jpg" alt="" srcset="">
                        </a>

                    </div>
                    <div class="gallery-item">
                        <a href="product-shot/DSC_0217.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC_0217.jpg" alt="" srcset="">
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="product-shot/DSC07028.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC07028.jpg" alt="" srcset="">
                        </a>

                    </div>
                    <div class="gallery-item">
                        <a href="product-shot/DSC_0060.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC_0060.jpg" alt="" srcset="">
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="product-shot/DSC_0011.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC_0011.jpg" alt="" srcset="">
                        </a>

                    </div>
                    <div class="gallery-item ">
                        <a href="product-shot/DSC_0070.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC_0070.jpg" alt="" srcset="">
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="product-shot/DSC_0123.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC_0123.jpg" alt="" srcset="">
                        </a>

                    </div>
                    <div class="gallery-item">
                        <a href="product-shot/DSC05235.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC05235.jpg" alt="" srcset="">
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="product-shot/DSC05385.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC05385.jpg" alt="" srcset="">
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="product-shot/DSC_0066.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC_0066.jpg" alt="" srcset="">
                        </a>

                    </div>
                    <div class="gallery-item">
                        <a href="product-shot/DSC_0152.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC_0152.jpg" alt="" srcset="">
                        </a>
                    </div>

                    <div class="gallery-item">
                        <a href="product-shot/DSC_0240.jpg" data-lightbox="product-shot" data-title="My caption">
                            <img class="gallery_img" src="product-shot/DSC_0240.jpg" alt="" >
                        </a>
                    </div>
                </div>
        </section>


        <!-- Paquete apps y menu digital -->
        <section style="background-image: url('./assets/images/slides/fondo1.jpg');background-position: center center;background-repeat: no-repeat;background-size: cover;">
            <h1 class="text-center text-white" style="font-size: 3.5rem; font-weight: bold; margin: 0;">FOTOGRAFIA PARA APPS Y MENÚ DIGITAL</h1>
            <div class="container paquete">
                <div class="row">
                    <div class="col-sm">
                        <div class="p-5 bd-highlight">
                            <div class="card mb-3 container">
                                <div class="card-header text-center letrero" style="background-color: #f7b9c6;">BÁSICO</div>
                                <div class="card-body text-success d-flex align-items-center justify-content-center">
                                    <h1 class="card-title precio">$1500MXN</h1>
                                </div>
                                <div class="card-footer bg-transparent text-center fotos">15 FOTOS</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="p-5 bd-highlight">
                            <div class="card mb-3 container">
                                <div class="card-header text-center letrero" style="background-color: #f77f98;">INTERMEDIO</div>
                                <div class="card-body text-success d-flex align-items-center justify-content-center">
                                    <h1 class="card-title precio">$2000MXN</h1>
                                </div>
                                <div class="card-footer bg-transparent text-center fotos">30 FOTOS</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="p-5 bd-highlight">
                            <div class="card mb-3 container">
                                <div class="card-header text-center letrero" style="background-color: #F5325C;">FULL</div>
                                <div class="card-body text-success d-flex align-items-center justify-content-center">
                                    <h1 class="card-title precio">$2999MXN</h1>
                                </div>
                                <div class="card-footer bg-transparent text-center fotos">50 FOTOS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Paquete creativa y redes sociales -->
        <section style="background-image: url('./assets/images/slides/fondo2.jpg');background-position: center center;background-repeat: no-repeat;background-size: cover;">
            <h1 class="text-center text-white" style="font-size: 3.5rem; font-weight: bold; margin: 0;"> FOTO CREATIVA Y PARA REDES SOCIALES</h1>
            <div class="container paquete">
                <div class="row">
                    <div class="col-sm">
                        <div class="p-5 bd-highlight">
                            <div class="card mb-3 container">
                                <div class="card-header text-center letrero" style="background-color: #f7b9c6;">BÁSICO</div>
                                <div class="card-body text-success d-flex align-items-center justify-content-center">
                                    <h1 class="card-title precio">$2500MXN</h1>
                                </div>
                                <div class="card-footer bg-transparent text-center fotos">15 FOTOS</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="p-5 bd-highlight">
                            <div class="card mb-3 container">
                                <div class="card-header text-center letrero" style="background-color: #f77f98;">INTERMEDIO</div>
                                <div class="card-body text-success d-flex align-items-center justify-content-center">
                                    <h1 class="card-title">$2999MXN</h1>
                                </div>
                                <div class="card-footer bg-transparent text-center fotos">30 FOTOS</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="p-5 bd-highlight">
                            <div class="card mb-3 container">
                                <div class="card-header text-center letrero" style="background-color: #F5325C;">FULL</div>
                                <div class="card-body text-success d-flex align-items-center justify-content-center">
                                    <h1 class="card-title">$3999MXN</h1>
                                </div>
                                <div class="card-footer bg-transparent text-center fotos">50 FOTOS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Paquete creativa y redes sociales -->
        <section style="" class="condiciones">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text-justify letras">
                        La fotografía creativa incluye el uso de fondos con diseño, elementos decorativos, distintos ángulos y composiciones.
                        La foto para apps es el alimento principal al centro, en un ángulo comensal de 45° sobre fondo blanco.
                        Precios no incluyen IVA.
                        Se requiere un 50% de anticipo para reservar fecha de la sesión.
                        El tiempo máximo de una sesión fotográfica es de 3 horas, sin excepción. Es importante contar con el apoyo de cocina para agilizar la sesión.
                        Accesorios o elementos decorativos al alimento principal, serán proporcionados por el cliente.
                        Los precios mostrados en esta página están sujetos a cambios sin previo aviso.
                        El tiempo de entrega podrá ser de 4 a 12 días hábiles una vez terminada la sesión fotográfica.
                        Los archivos finales se enviarán una vez liquidado el resto del paquete solicitado, sin excepción.
                        Precios aplican dentro del área metropolitana de Guadalajara. Sesiones foráneas se ofrecerá un nuevo presupuesto al cliente.
                        Sesiones fuera de la zona metropolitana o que no incluyan lo antes descrito se debe cotizar.
                        </p>
                    </div>
                </div>
            </div>
        </section>




        <!--== Contact Start ==-->
        <section class="transition-none" id="contact"
            style="background:url(assets/images/background/stars-bg-4.webp) center center no-repeat #fff; padding-top:25px !important;">
            <div class="container">
                <?php echo $alert; ?>

                <div class="row mt-10">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h1 class="dark-color">Solicita una <span class="text-bottom-line-sm">Cotización</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-10 centerize-col">
                        <form action="#my-form" name="formulario" method="POST" class="contact-form-style-03 dark-bg all-padding-30 mt-50 border-radius-5" id="my-form">
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name" id="name" class="md-input style-02" placeholder="Nombre completo *" required>
                                    </div>
                                </div>

                                <input style="display: none;" name="firstname" type="text" id="firstname" class="hide-robot">

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="mail">Correo</label>
                                        <input type="email" name="mail" id="mail" class="md-input style-02" placeholder="Correo *" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="phone">Whatsapp</label>
                                        <input type="text" name="phone" id="phone" class="md-input style-02" placeholder="Whatsapp *">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="texto">Detalles del proyecto</label>
                                        <input type="text" name="texto" id="texto" class="md-input style-02" placeholder="Detalles del proyecto" required>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6LcJvVIaAAAAAIf6_p4jQXJzMmmZ6VlimVC10_4P">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="text-center">
                                        <button type="submit" name="submit"
                                            class="btn btn-md btn-color btn-circle remove-margin">Enviar </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>


        <!--== Footer Start ==-->
        <?php
        include "includes/footer.php";
        ?>
        <!--== Footer End ==-->

        <!--== Go to Top  ==-->
        <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
        <!--== Go to Top End ==-->

    </div>
    <!--== Wrapper End ==-->
    <!-- Modal -->
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
    <div class="modal fade" id="mimodalejemplo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Ponte en contacto con nosotros por medio de este
                        formulario</h4>
                </div>
                <div class="modal-body">
                    <form class="contact-form d-flex flex-column align-items-center" action="" method="POST"
                        id="formIndexModal">
                        <div class="form-group w-75">
                            <label for="nombre" class="">Nombre</label>
                            <input type="text" name="nombreIndex" class="md-input style-02 border-radius-5"
                                id="nombreIndex" style="  border-color: black;">
                            <span id="nombreIndex_error" class="default-color font-10px"></span>
                        </div>
                        <div class="form-group w-75">
                            <label for="telefono" class="">WhatsApp</label>
                            <input type="tel" name="telefonoIndex" class="md-input style-02 border-radius-5"
                                id="telefonoIndex" style="  border-color: black;">
                            <span id="telefonoIndex_error" class="default-color font-10px"></span>
                        </div>
                        <div class="form-group w-75">
                            <label for="selectProyectos" class="">Proyecto</label>
                            <select name="proyectosIndex" class="md-input border-radius-5"
                                style="margin-bottom: 20px; border-color:black; color:black;">
                                <option value="">...</option>
                                <option value="Desarrollo Web" style="color: black;">Desarrollo Web</option>
                                <option value="Tienda en linea" style="color: black;">Tienda en linea</option>
                                <option value="Campañas de Marketing Digital" style="color: black;">Campañas de
                                    Marketing Digital</option>
                                <option value="Administración de Redes Sociales" style="color: black;">
                                    Administración de Redes Sociales</option>
                                <option value="Sesión Fotografica" style="color: black;">
                                    Sesión Fotografica</option>
                            </select>
                            <span id="proyectosIndex_error" class="default-color font-10px"></span>
                        </div>
                        <div class="form-group w-75">
                            <label for="negocio" class="">Nombre de tu negocio</label>
                            <input type="text" name="negocioIndex" class="md-input style-02 border-radius-5"
                                id="negocioIndex" style="  border-color: black;">
                            <span id="negocioIndex_error" class="default-color font-10px"></span>
                        </div>

                        <div class="form-group w-75">
                            <label for="descripcion" class="">Detalles del proyecto</label>
                            <textarea name="descripcionIndex" class="md-textarea style-02 border-radius-5"
                                id="descripcionIndex" rows="7" style="  border-color: black;"></textarea>
                            <span id="descripcionIndex_error" class="default-color font-10px"></span>
                        </div>
                        <div class="form-groupS">
                            <div class="g-recaptcha" data-sitekey="6LcJvVIaAAAAAIf6_p4jQXJzMmmZ6VlimVC10_4P">
                            </div>
                            <span id="captcha_error" class="default-color font-10px"></span>
                        </div>
                        <div class="text-left mt-20">
                            <input type="submit" name="sendIndexModal" id="sendIndexModal"
                                class="btn btn-lg btn-color btn-rounded remove-margin"></input>
                        </div>
                    </form>
                    <!--Form with header-->
                </div>
            </div>
        </div>
    </div>
    <!--== Javascript Plugins ==-->
    <script src="https://kit.fontawesome.com/88f4b8bc1d.js" crossorigin="anonymous"></script>

    <script src="script.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
        integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/master.js"></script>
    <script src="assets/slick/slick.js"></script>

    <script>
    $(document).ready(function() {
        $('#formIndex').on('submit', function(e) {
            e.preventDefault();
            var formdata = new FormData(this);
            $.ajax({
                url: "server/sendEmail/enviarIndex",
                type: "POST",
                cache: false,
                data: formdata,
                contentType: false,
                processData: false,
                dataType: "json",
                beforeSend: function() {
                    $('#sendIndexModal').attr('disabled', 'disabled');
                },
                success: function(data) {
                    $('#sendIndexModal').attr('disabled', false);
                    if (data.success) {
                        $('#formIndex')[0].reset();
                        $('#nombreIndex_error').text('');
                        $('#telefonoIndex_error').text('');
                        $('#proyectosIndex_error').text('');
                        $('#negocioIndex_error').text('');
                        $('#descripcionIndex_error').text('');
                        $('#captcha_error').text('');
                        grecaptcha.reset();
                        alert('¡Enviado Correctamente!');

                    } else {
                        $('#nombreIndex_error').text(data.nombreIndex_error);
                        $('#telefonoIndex_error').text(data.telefonoIndex_error);
                        $('#proyectosIndex_error').text(data
                            .proyectosIndex_error);
                        $('#negocioIndex_error').text(data.negocioIndex_error);
                        $('#descripcionIndex_error').text(data
                            .descripcionIndex_error);
                        $('#captcha_error').text(data.captcha_error);
                    }
                }
            });
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#formIndexModal').on('submit', function(e) {
            e.preventDefault();
            var formdata = new FormData(this);
            $.ajax({
                url: "server/sendEmail/enviarIndex",
                type: "POST",
                cache: false,
                data: formdata,
                contentType: false,
                processData: false,
                dataType: "json",
                beforeSend: function() {
                    $('#sendIndex').attr('disabled', 'disabled');
                },
                success: function(data) {
                    $('#sendIndex').attr('disabled', false);
                    if (data.success) {
                        $('#formIndex')[0].reset();
                        $('#nombreIndex_error').text('');
                        $('#telefonoIndex_error').text('');
                        $('#proyectosIndex_error').text('');
                        $('#negocioIndex_error').text('');
                        $('#descripcionIndex_error').text('');
                        $('#captcha_error').text('');
                        grecaptcha.reset();
                        alert('¡Enviado Correctamente!');

                    } else {
                        $('#nombreIndex_error').text(data.nombreIndex_error);
                        $('#telefonoIndex_error').text(data.telefonoIndex_error);
                        $('#proyectosIndex_error').text(data
                            .proyectosIndex_error);
                        $('#negocioIndex_error').text(data.negocioIndex_error);
                        $('#descripcionIndex_error').text(data
                            .descripcionIndex_error);
                        $('#captcha_error').text(data.captcha_error);
                    }
                }
            });
        });
    });
    </script>
    <script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': false
    })
    </script>
    <script>
    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    </script>
    <script>
    $('.responsive-1').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        arrows: false,
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                arrows: false,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                arrows: false,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                arrows: false,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    </script>
    
    <!-- Revolution js Files -->
    <!--   <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
 <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
 -->
    <!--  <script src="revolution/js/revolution.extension.actions.min.js"></script>
 -->
    <!--  <script src="revolution/js/revolution.extension.carousel.min.js"></script>
 -->
    <script src="revolution/js/revolution.extension.kenburn.min.js"></script>
    <!--   <script src="revolution/js/revolution.extension.layeranimation.min.js"></script>
 -->
    <!--   <script src="revolution/js/revolution.extension.migration.min.js"></script>
 -->
    <!--   <script src="revolution/js/revolution.extension.navigation.min.js"></script>
 -->
    <script src="revolution/js/revolution.extension.parallax.min.js"></script>
    <!--   <script src="revolution/js/revolution.extension.slideanims.min.js"></script>
 -->
    <!--   <script src="revolution/js/revolution.extension.video.min.js"></script>
 -->
    <!--== Javascript Plugins End ==-->


</body>

</html>