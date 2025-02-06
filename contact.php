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
                        <a href="service.php" class="nav-item nav-link">Servicios</a>
                        <a href="contact.php" class="nav-item nav-link active">Contactactanos</a>
                    </div>
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Empezar</a>
                </div>
            </nav>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contactos</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.php">Casa</a></li>
                        <li class="breadcrumb-item active text-primary">Contactos</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="wow fadeInUp text-center" data-wow-delay="0.2s">
                            <div class="bg-light rounded p-5 mb-5">
                                <h4 class="text-primary mb-4">Contacto - Museo Arqueológico y Antropológico de Apurímac</h4>
                                <div class="row g-4 justify-content-center">
                                    <div class="col-md-6">
                                        <div class="contact-add-item text-center">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Dirección</h4>
                                                <p class="mb-0">Abancay, Apurímac, Perú</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item text-center">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fas fa-envelope fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Correo Electrónico</h4>
                                                <p class="mb-0">museoapurimac@cultura.pe</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item text-center">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fa fa-phone-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Teléfono</h4>
                                                <p class="mb-0">(+51) 083-123456</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light p-5 rounded h-100 wow fadeInUp text-center" data-wow-delay="0.2s">
                                <h4 class="text-primary">Ubicación en el Mapa</h4>
                                <iframe class="rounded w-100" 
                                    style="height: 400px;" 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.2401904951836!2d-72.89139578560258!3d-13.635463790402712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916d06f3b9c9cd71%3A0x6c1c32c1ff5e82c8!2sMuseo%20Arqueol%C3%B3gico%20y%20Antropol%C3%B3gico%20de%20Apur%C3%ADmac!5e0!3m2!1ses!2spe!4v1700000000000" 
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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

        
        <!-- JavaScript Libraries -->
        <?php include_once 'sections/scripts.php';?>
    </body>

</html>