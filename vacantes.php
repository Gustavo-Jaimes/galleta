<?php
require_once 'dbconn.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Somos la Agencia de Marketing Digital ideal para tu empresa, ofrecemos una verdadera estrategia digital para hacer crecer tu empresa. Métele Galleta a tu Empresa.">
    <meta name="keywords"
        content="paginas web, tienda en linea, diseño paginas web, creación de paginas web, desarrollo de paginas web, crea tu pagina web, venta en linea, diseño web profesional, agencia de diseño web, 
precio pagina web, elaboración de paginas web, paginas web profesionales, diseño tiendas online, cotización pagina web, diseño web precios, ecommerce online, diseño pagina web precio, diseño web a medida, costo pagina web, 
diseño de paginas web, paginas web para negocios, agencia de desarrollo web, empresas de diseño de paginas web, creacion de sitios web, creador de paginas, necesito una pagina web para mi empresa, diseño web para empresas,
 pagina web para mi negocio, diseño paginas web precios, tienda ecommerce, desarrollo ecommerce, servicio de diseño web, pagina web ecommerce">
    <title>Galleta MKT | Unete al equipo</title>
    <!--<link rel="shortcut icon" href="assets/images/favicon.ico">-->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- Core Style Sheets -->
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/wp.css">


    <!-- Responsive Style Sheets -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177603069-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-177603069-1');
    </script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PKB38F2');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKB38F2" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Messenger plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "104663904472711");
    chatbox.setAttribute("attribution", "page_inbox");
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v10.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- End Messenger plugin -->


    <!-- Facebook Pixel Code -->

    <script>
    ! function(f, b, e, v, n, t, s)


    {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?


                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };


        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';


        n.queue = [];
        t = b.createElement(e);
        t.async = !0;


        t.src = v;
        s = b.getElementsByTagName(e)[0];


        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',


        'https://connect.facebook.net/en_US/fbevents.js');


    fbq('init', '1744961015666977');


    fbq('track', 'PageView');
    </script>


    <noscript>


        <img height="1" width="1" src="https://www.facebook.com/tr?id=1744961015666977&ev=PageView&noscript=1" />


    </noscript>


    <!-- End Facebook Pixel Code -->

    <style>
    .modal-backdrop {
        position: relative;
    }

    input,
    select {
        border: 1px solid #c4cccc;
        color: #000000;
    }

    hr {
        margin: 0 auto;
    }

    li {
        list-style-type: none;
    }

    .btn-light-outline {
        color: #fff;
        border: 3px solid #F5325C;
        background-color: transparent;
    }

    .btn-light-outline:hover,
    .btn-light-outline:active,
    .btn-light-outline:focus {
        color: #fff;
        border-color: #F5325C;
        background-color: #F5325C;
    }

    .btn.btn-md {
        font-size: 12px;
    }

    .parallax-inner {
        top: 20rem;
    }

    .fb_dialog_content iframe.fb_customer_chat_icon {
        bottom: 90px !important;
        right: 13px !important;
        width: 60px !important;
        height: 60px !important;
    }
    </style>

</head>

<body>
    <!-- wpp-btn-mobile -->
    <div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style=""><a
            id="WhatsApp-button" href="https://wa.link/fv4uxq" target="_blank" class="phoneJs"
            title="WhatsApp 360imagem">
            <div class="cbh-ph-circle"></div>
            <div class="cbh-ph-circle-fill"></div>
            <div class="cbh-ph-img-circle1"></div>
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
        <?php include "includes/menu-header.php"; ?>
        <!--== Header End ==-->

        <div class="planet-x-wrap">
            <div class="planet-x-left">
                <img src="assets/images/planet-x-right-2.png" alt="mockup-1" class="img-responsive"
                    style="left: 115rem !important;" />
            </div>
            <!--<div class="planet-x-right">
                <img src="assets/images/planet-x-right.png" alt="mockup-2" class="img-responsive"/>
              </div>-->
        </div>

        <section class="transition-none" id="blog"
            style="background:url(assets/images/background/mkt.png) center center no-repeat #24182e; padding-top: 155px !important; padding-bottom: 200px !important;">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 text-center parallax-content height-400px centerize-col">
                        <div class="center-layout">
                            <div class="v-align-middle">
                                <h1 class="white-color cardo-font xs-font-30px font-60px"
                                    style="font-family: 'Cardo', serif;font-style: italic;font-weight:400;"
                                    data-backfont="">En Galleta Marketing Digital, estamos en búsqueda de tu
                                    <span class="text-bottom-line-sm">talento!</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=== About Us Start ======-->
        <section class="lg-section" id="about">
            <div class="col-md-6 col-sm-4 bg-flex bg-flex-left">
                <div class="bg-flex-holder bg-flex-cover"
                    style="background-image: url(assets/images/background/oferta_de_trabajo.png);">
                </div>
            </div>
            <div class="container-fluid">
                <div class="col-md-6 col-sm-7 col-md-offset-6 col-sm-offset-4">
                    <div class="section-title">
                        <h1>Nuestra oferta de <span class="text-bottom-line-sm">trabajo</span></h1>
                    </div>
                    <p class="font-16px line-height-25 text-justify">Tendrás la oportunidad de desarrollar tus
                        habilidades al mismo tiempo que te diviertes, Contamos con un plan de capacitaciones que te
                        ayudarán a tener un pronto crecimiento dentro de la empresa y en tu vida laboral. </p>

                </div>
            </div>
        </section>
        <!--=== About Us End ======-->

        <div class="planet-x-wrap">
            <div class="planet-x-left-2">
                <img src="assets/images/planet-x-right-3.png" alt="mockup-5" class="img-responsive" />
            </div>
        </div>

        <!--== Blogs Start ==-->
        <section class="transition-none" id="blog"
            style="background:url(assets/images/background/stars-bg.png) center center no-repeat #24182e;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="cardo-font default-color" data-backfont="vacantes">Vacantes disponibles</h2>
                            <h1 class="white-color">Últimas ofertas añadidas</h1>
                        </div>
                    </div>
                </div>
                <div class="row mt-20 blog-style-01">

                            <?php

								$vacantes = mysqli_query($conexion, "SELECT * FROM vacantes");

								foreach ($vacantes as $rowCampa) {
							?>

                    <div class="col-xs-12 col-sm-4 col-md-4 h-100">
                        <div class="post">
                            <div class="post-img border-radius-5">
                                <img class="img-responsive" src="https://vacantes.galletamkt.com/<?php echo $rowCampa['foto']?>" alt="" />
                                <div class="post-metas">
                                    <div class="post-metas-center">
                                        <p class="post-date"><?php echo $rowCampa['puesto']?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="post-info all-padding-20 white-color">
                                <h3 class="text-center"><?php echo $rowCampa['titulo']?>
                                </h3>
                                <div class="text-center d-inline">
                                    <!-- <button type="button" class="btn btn-md btn-light-outline btn-rounded"
                                        data-toggle="modal" data-target="#modalVacante1">Detalles</button> -->
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded btnVacante"
                                        data-id="<?php echo $rowCampa['id']?>">Detalles</button>
                                    <button type="button" class="btn btn-md btn-light-outline btn-rounded postular"
                                        data-toggle="modal" data-target="#uneteEquipo">Postularme</button>
                                </div>
                            </div>
                        </div>

                    </div>


                    <?php
									}
							?>




                    <!-- <div class="blog-carousel">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="post">
                                <div class="post-img border-radius-5">
                                    <img class="img-responsive" src="assets/images/vacantes/multimedia.png" alt="" />
                                    <div class="post-metas">
                                        <div class="post-metas-center">
                                            <p class="post-date">9 de Febrero, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-info all-padding-20 white-color">
                                    <h3 class="text-center">Creador y editor de contenido multimedia - Diseño multimedia
                                    </h3>
                                    <div class="text-center d-inline">
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded"
                                            data-toggle="modal" data-target="#modalVacante1">Detalles</button>
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded postular"
                                            data-toggle="modal" data-target="#uneteEquipo">Postularme</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="post">
                                <div class="post-img border-radius-5">
                                    <img class="img-responsive" src="assets/images/vacantes/comunity_manager.png"
                                        alt="" />
                                    <div class="post-metas">
                                        <div class="post-metas-center">
                                            <p class="post-date">9 de Febrero, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-info all-padding-20 white-color">
                                    <h3 class="text-center">Community manager Jr</h3>
                                    <div class="text-center d-inline">
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded"
                                            data-toggle="modal" data-target="#modalVacante2">Detalles</button>
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded postular"
                                            data-toggle="modal" data-target="#uneteEquipo">Postularme</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="post">
                                <div class="post-img border-radius-5">
                                    <img class="img-responsive" src="assets/images/vacantes/becario_multimedia.png"
                                        alt="" />
                                    <div class="post-metas">
                                        <div class="post-metas-center">
                                            <p class="post-date">16 de Febrero, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-info all-padding-20 white-color">
                                    <h3 class="text-center">Becario diseño multimedia</h3>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded "
                                            data-toggle="modal" data-target="#modalVacante3">Detalles</button>
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded postular"
                                            data-toggle="modal" data-target="#uneteEquipo">Postularme</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="post">
                                <div class="post-img border-radius-5">
                                    <img class="img-responsive" src="assets/images/vacantes/programador_Jr" alt="" />
                                    <div class="post-metas">
                                        <div class="post-metas-center">
                                            <p class="post-date">16 de Febrero, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-info all-padding-20 white-color">
                                    <h3 class="text-center">Programador web Jr</h3>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded"
                                            data-toggle="modal" data-target="#modalVacante4">Detalles</button>
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded postular"
                                            data-toggle="modal" data-target="#uneteEquipo">Postularme</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="post">
                                <div class="post-img border-radius-5">
                                    <img class="img-responsive" src="assets/images/vacantes/marketing_digital.png"
                                        alt="" />
                                    <div class="post-metas">
                                        <div class="post-metas-center">
                                            <p class="post-date">16 de Febrero, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-info all-padding-20 white-color">
                                    <h3 class="text-center">Marketing digital</h3>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded"
                                            data-toggle="modal" data-target="#modalVacante5">Detalles</button>
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded postular"
                                            data-toggle="modal" data-target="#uneteEquipo">Postularme</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="post">
                                <div class="post-img border-radius-5">
                                    <img class="img-responsive" src="assets/images/vacantes/diseñador_jr.png" alt="" />
                                    <div class="post-metas">
                                        <div class="post-metas-center">
                                            <p class="post-date">9 de Febrero, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-info all-padding-20 white-color">
                                    <h3 class="text-center">Diseñador gráfico Jr</h3>
                                    <div class="text-center d-inline">
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded"
                                            data-toggle="modal" data-target="#modalVacante6">Detalles</button>
                                        <button type="button" class="btn btn-md btn-light-outline btn-rounded postular"
                                            data-toggle="modal" data-target="#uneteEquipo">Postularme</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> -->
                </div>
            </div>
        </section>
        <!--== Blogs End ==-->

        <!--== Call to Action Start ==-->
        <section class="parallax-bg fixed-bg xs-pt-40 xs-pb-40 pt-80 pb-80"
            data-parallax-bg-image="assets/images/background/con_nosotros.png" data-parallax-speed="0.5"
            data-parallax-direction="up">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h2 class="cardo-font default-color" data-backfont="Unete">Se parte del equipo</h2>
                        <h1 class="white-color" style="font-size: 30px"> Ponte en contacto con nosotros por medio de
                            este formulario</h1>
                        <!-- <hr class="left-line white-bg"> -->
                    </div>
                </div>
                <div class="text-center">
                    <button id="registraVacante" type="button" class="btn btn-lg btn-color btn-square"
                        data-toggle="modal" data-target="#uneteEquipo"><span class='glyphicon glyphicon-plus'></span>
                        Únete al equipo</button>
                </div>
            </div>
        </section>
        <!--== Call to Action End ==-->

        <!--== Footer Start ==-->
        <?php include "includes/footer.php"; ?>
        <?php include "includes/modals.php"; ?>
        <!--== Footer End ==-->

        <!--== Go to Top  ==-->
        <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
        <!--== Go to Top End ==-->

    </div>
    <!-- Vacante 1 -->
<div class="modal fade" id="modalVacante1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descripcion de la vacante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark btn-rounded remove-margin" type="button"
                    data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
    <!--== Wrapper End ==-->
    <script type="text/javascript">
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>


    <!--== Javascript Plugins ==-->
    <script src="https://kit.fontawesome.com/88f4b8bc1d.js" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJNGOwO2hJpJ9kz8e0UUPjZhEbgDJTTXE"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/master.js"></script>

    <script>
    $(document).ready(function() {
        $('#formVacantes').on('submit', function(e) {
            e.preventDefault();
            var formdata = new FormData(this);
            $.ajax({
                url: "server/sendEmail/enviarVacante",
                type: "POST",
                cache: false,
                data: formdata,
                contentType: false,
                processData: false,
                dataType: "json",
                beforeSend: function() {
                    $('#sendEmail').attr('disabled', 'disabled');
                },
                success: function(data) {
                    $('#sendEmail').attr('disabled', false);
                    if (data.success) {
                        $('#formVacantes')[0].reset();
                        $('#vacantesDisponibles_error').text('');
                        $('#emailVacante_error').text('');
                        $('#nombreVacante_error').text('');
                        $('#telefonoVacante_error').text('');
                        // $('#archivo_error').text('');
                        $('#captcha_error').text('');
                        grecaptcha.reset();
                        $('#uneteEquipo').modal('hide');
                        alert('¡Enviado Correctamente!');

                    } else {
                        $('#vacantesDisponibles_error').text(data
                            .vacantesDisponibles_error);
                        $('#emailVacante_error').text(data.emailVacante_error);
                        $('#nombreVacante_error').text(data.nombreVacante_error);
                        $('#telefonoVacante_error').text(data.telefonoVacante_error);
                        // $('#archivo_error').text(data.archivo_error);
                        $('#captcha_error').text(data.captcha_error);
                    }
                }
            });
        });
    });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.btnVacante').click(function(){
                var vacante = $(this).data('id');
                // alert(vacante)
                $.ajax({
                    url:'detail.php',
                    type:'post',
                    data: {vacante: vacante},
                    success: function(response){
                        $('.vacante-body').html(response);
                        $('#modalVacante1').modal('show');

                    }
                })
            });
        });
    </script>

    <!-- Revolution js Files -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="revolution/js/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/revolution.extension.video.min.js"></script>
    <!--== Javascript Plugins End ==-->

</body>

</html>