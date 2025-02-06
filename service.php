<?php include_once 'secciones/t_inicio.php';?>
    <body>

        <!-- Spinner Start -->
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <?php include_once 'secciones/topbar.php';?>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary"><i class="fas fa-landmark me-3"></i>Museo</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Casa</a>
                        <a href="about.php" class="nav-item nav-link">Acerca de</a>
                        <a href="service.php" class="nav-item nav-link active">Servicio</a>
                        <a href="contact.php" class="nav-item nav-link">Contactactanos</a>
                    </div>
                    <a href="service.php" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Empezar</a>
                </div>
            </nav>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Nuestros Servicios</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Casa</a></li>
                        <li class="breadcrumb-item active text-primary">Servicios</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Services Start -->
        <div class="container-fluid service pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Nuestros servicios</h4>
                    <h1 class="display-5 mb-4">Ofrecemos los mejores servicios</h1>
                    <p class="mb-0">
                    Descubre la historia y cultura en el mejor museo de Abancay 🏛️✨. Ofrecemos experiencias únicas con exposiciones fascinantes, recorridos guiados y actividades interactivas. ¡Visítanos y vive la historia como nunca antes! 🔎🎭.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/ampay.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> Ampay </a>
                                <p class="mb-4">Ampay es una montaña del Perú con una altitud máxima de 5.235 m s. n. m. Está situada en los Andes del Perú, en la Región Apurímac, provincia de Abancay. La montaña se encuentra en el Santuario Nacional de Ampay.​​​​​Posible etimología De q'ampay→ hampay → ampay;​ posiblemente 'arrollar' ​ </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="detalleampay.php"> Mas información </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/museo.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> Ex-Casa Hacienda Illanya </a>
                                <p class="mb-4">Es una de las primeras haciendas de la época colonial (1592) y su estilo arquitectónico es francés. Durante muchos años produjo aguardiente de caña de azúcar, chancaca y miel de caña. Actualmente, está restaurada y en su interior se puede conocer el Museo de la Dirección Regional de Cultura.

                                    Se ubica a 4 km de la ciudad de Abancay (15 min vía terrestre).</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="detalleillanya.php">Mas información</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/puente.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Puente colonial Pachachaca</a>
                                <p class="mb-4">Puente antiguo sobre el río con el mismo nombre, que significa “Puente sobre el Mundo”. 
                                    Une las provincias de Abancay y Andahuaylas, ubicándose entre los terrenos de las Ex Casas Haciendas de Pachachaca y Auquibamba. 
                                    En tiempos prehispánicos fue conocido como Aucapana Mayu, y era un puente construido con cabuyas y palos. 

                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="detallepachachaca.php">Mas información</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/saywite.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Piedra de Saymite</a>
                                <p class="mb-4">El Sitio arqueológico de Saywite tiene su ubicación en el distrito de Curahuasi, dentro de la provincia de Abancay, 
                                    perteneciente a la cultura incaica y que posiblemente hubiera sido construido durante el siglo XVI, ocupando un área aproximada 
                                    de 60 hectáreas en las que se albergan importantes muestras del arte lítico incaico junto con espacios destinados a fines rituales. 

                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="detallesaywite.php">Mas información</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/toro.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Cataratas De Umaturco</a>
                                <p class="mb-4">Las Cataratas de Umaturco pertenece al anexo de Pampaccahuana de la comunidad campesina de La Unión, 
                                    del distrito de Circa, provincia de Abancay, ubicado a una altitud de 4168 metros sobre el nivel del mar, en la 
                                    región natural puna. Presenta un clima frígido, la temperatura media anual fluctúa entre los 0° C y 11° C, mientras 
                                    que la temperatura máxima alcanza los 19° C durante el día.

                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="detallecataratas.php">Mas información</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/yaca.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Hacienda de Yaca</a>
                                <p class="mb-4">Sus orígenes se remontan al siglo XVIII, caracterizándose por ser una zona netamente cañaveral, 
                                    insumo para la industrialización y obtención de aguardiente de caña. El ingreso al lugar es a través de un 
                                    arco triunfal parabólico que da acceso a una plazuela, resaltando a la vista una capilla con un diseño 
                                    arquitectónico propio del estilo europeo; en la parte posterior se observan construcciones de cal y canto 
                                    con instalaciones hidráulicas para el funcionamiento del trapiche.

                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="detalleyaca.php">Mas información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Footer Start -->
        <?php include_once 'sections/footer.php';?> 
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="container py-4">
                        <footer class="d-flex justify-content-between align-items-center">
                            <div class="col-md-6 text-center text-md-start mb-md-0">
                            <strong>&copy; 2024-<?php echo date('Y'); ?> Todos los derechos reservados.</strong>
                            </div>
                            <div class="float-right d-none d-sm-inline-block">
                                <b>Versión</b> 3.2.0
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
        
        <?php include_once 'sections/scripts.php';?>
    </body>

</html>