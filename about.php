<?php include_once 'secciones/t_inicio.php';?>
    <body>

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
                        <a href="about.php" class="nav-item nav-link active">Acerca de</a>
                        <a href="service.php" class="nav-item nav-link">servicios</a>
                        <a href="contact.php" class="nav-item nav-link">Contactactanos</a>
                    </div>
                    <a href="service.php" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Empezar</a>
                </div>
            </nav>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Acerca de</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Casa</a></li>
                        <li class="breadcrumb-item active text-primary">Acerca de</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary">Acerca del Museo</h4>
                            <h1 class="display-5 mb-4">Descubre la historia y cultura en nuestro museo</h1>
                            <p class="mb-4">Explora una colección única de artefactos y exposiciones que cuentan la historia de nuestra herencia cultural. Desde piezas arqueológicas hasta arte moderno, nuestro museo ofrece una experiencia enriquecedora para todos.</p>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="fas fa-landmark fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Exhibiciones Históricas</h4>
                                            <p>Descubre artefactos y documentos que narran el pasado de nuestra civilización.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="bi bi-palette fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Galería de Arte</h4>
                                            <p>Admira pinturas, esculturas y obras maestras de artistas reconocidos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <a href="service.php" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Explorar Ahora</a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex">
                                        <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                        <div>
                                            <h4>Contáctanos</h4>
                                            <p class="mb-0 fs-5" style="letter-spacing: 1px;">+01234567890</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded position-relative overflow-hidden">
                            <div class="rounded-bottom">
                                <!-- Contenedor de A-Frame -->
                                <a-scene embedded>
                                    <a-assets>
                                        <img id="my-image" src="img/plaza.jpg">
                                    </a-assets>

                                    <!-- Varias imágenes dentro de marcos -->
                                    <a-entity>
                                        <!-- Frente -->
                                        <a-box position="0 2 -5" width="10.5" height="8.5" depth="0.1" color="black"></a-box>
                                        <a-image src="#my-image" position="0 2 -4.95" width="10" height="8"></a-image>

                                        <!-- Atrás -->
                                        <a-box position="0 2 5" width="10.5" height="8.5" depth="0.1" color="black"></a-box>
                                        <a-image src="#my-image" position="0 2 4.95" rotation="0 180 0" width="10" height="8"></a-image>

                                        <!-- Izquierda -->
                                        <a-box position="-5 2 0" rotation="0 90 0" width="10.5" height="8.5" depth="0.1" color="black"></a-box>
                                        <a-image src="#my-image" position="-4.95 2 0" rotation="0 90 0" width="10" height="8"></a-image>

                                        <!-- Derecha -->
                                        <a-box position="5 2 0" rotation="0 -90 0" width="10.5" height="8.5" depth="0.1" color="black"></a-box>
                                        <a-image src="#my-image" position="4.95 2 0" rotation="0 -90 0" width="10" height="8"></a-image>

                                        <!-- Arriba -->
                                        <a-box position="0 7 0" rotation="90 0 0" width="10.5" height="8.5" depth="0.1" color="black"></a-box>
                                        <a-image src="#my-image" position="0 6.95 0" rotation="90 0 0" width="10" height="8"></a-image>

                                        <!-- Abajo -->
                                        <a-box position="0 -3 0" rotation="-90 0 0" width="10.5" height="8.5" depth="0.1" color="black"></a-box>
                                        <a-image src="#my-image" position="0 -2.95 0" rotation="-90 0 0" width="10" height="8"></a-image>
                                    </a-entity>

                                    <!-- Cámara -->
                                    <a-camera position="0 1.6 0">
                                        <a-cursor></a-cursor>
                                    </a-camera>
                                </a-scene>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Team Start -->
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Nuestro Equipo</h4>
                    <h1 class="display-5 mb-4">Conozca a nuestros expertos en historia y arte</h1>
                    <p class="mb-0">Nuestro equipo está compuesto por arqueólogos, historiadores y curadores especializados que trabajan para preservar y compartir el conocimiento sobre nuestro patrimonio cultural. Cada uno de ellos aporta su experiencia y pasión para ofrecer exposiciones y actividades enriquecedoras para nuestros visitantes.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/limas3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">Dany Santiago</h4>
                                <p class="mb-0">Profesion</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

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


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
        
        <?php include_once 'sections/scripts.php';?>
    </body>

</html>