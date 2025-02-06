<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    $isAuthenticated = isset($_SESSION['usuario']); // Verifica si el usuario está autenticado
    ?>
    <head>
        <meta charset="utf-8">
        <title>Puente colonial Pachachaca</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Ubicación</a>
                        <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+51 936215487</a>
                        <a href="mailto:example@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>museoVirtual@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="registrar.php"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Registro</small></a>
                        <a href="login.php"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Acceso</small></a>
                    </div>
                </div>
            </div>
        </div>
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
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link active" data-bs-toggle="dropdown">
                                <span class="class">Servicios</span>
                            </a>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contactactanos</a>
                    </div>
                    <a href="service.php" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Empezar</a>
                </div>
            </nav>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Puente Colonial de Pachachaca</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.php">Casa</a></li>
                        <li class="breadcrumb-item active text-primary">Detalle de Pachachaca</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- FAQs Start -->
        <div class="container-fluid faq-section py-5">
    <div class="container py-5 overflow-hidden">
        
        <!-- Sección de audio con diseño -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <div class="audio-container p-4 rounded shadow">
                    <h4 class="mb-3 text-white">Escucha la magia del Puente Colonial de Pachachaca</h4>
                    <audio controls class="w-100">
                        <source src="audio/pachachaca.mp3" type="audio/mpeg">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                </div>
            </div>
        </div>

        <div class="row g-5 align-items-center">
            <!-- Sección de texto -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                    <div class="accordion-item rounded-top">
                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                            <h1 class="display-5 mb-4">Puente Colonial de Pachachaca</h1>
                            <p class="mb-4">
                                El <strong>Puente Colonial de Pachachaca</strong> es una histórica estructura de piedra construida en el <strong>siglo XVII</strong> sobre el río Pachachaca, en la región de <strong>Apurímac</strong>. Fue edificado durante el virreinato del <strong>Conde de Lemos</strong> para conectar <em>Cusco y Lima</em> a través del Camino Real de los Andes.
                            </p>
                            <p class="mb-4">
                                Su nombre proviene del quechua y significa <em>"Puente del Mundo"</em>, reflejando su importancia en la conectividad regional. Construido con <strong>piedra, cal y canto</strong>, ha resistido siglos de historia y es considerado un <strong>monumento arquitectónico y turístico</strong>.
                            </p>
                            <p class="mb-4">
                                Actualmente, el puente sigue en pie, rodeado de bellos paisajes andinos, quebradas y montañas. Es un destino ideal para los amantes de la historia, la fotografía y el turismo cultural en Apurímac.
                            </p>
                            <p class="mb-0">
                                📍 <strong>Ubicación:</strong> 17 km al este de Abancay, Apurímac, Perú.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección del slider (carrusel) -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicadores -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    
                    <!-- Imágenes del carrusel -->
                    <div class="carousel-inner bg-primary rounded">
                        <div class="carousel-item active">
                            <img src="img/puente1.jpg" class="d-block w-100 img-fluid" alt="Imagen 1">
                        </div>
                        <div class="carousel-item">
                            <img src="img/puente2.jpg" class="d-block w-100 img-fluid" alt="Imagen 2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/puente3.jpg" class="d-block w-100 img-fluid" alt="Imagen 3">
                        </div>
                    </div>

                    <!-- Controles de navegación -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            <!-- Calificación con estrellas -->
            <div class="text-center mt-3">
                    <span class="star" data-value="1"><i class="fas fa-star"></i></span>
                    <span class="star" data-value="2"><i class="fas fa-star"></i></span>
                    <span class="star" data-value="3"><i class="fas fa-star"></i></span>
                    <span class="star" data-value="4"><i class="fas fa-star"></i></span>
                    <span class="star" data-value="5"><i class="fas fa-star"></i></span>
                    <p id="rating-text" class="mt-2">Calificación: 0/5</p>
                    <?php if (!$isAuthenticated): ?>
                        <p class="text-danger">⚠ Primero inicia sesión para calificar.</p>
                    <?php endif; ?>
                </div>
                <!-- Botón "Cómo llegar" -->
                <div class="text-center mt-2">
                    <a href="https://maps.app.goo.gl/vXuDZgSHLHmX9VfS9" target="_blank" class="btn btn-primary">
                    <!--<a href="https://www.google.com/maps/dir/?api=1&destination=-13.6631822,-72.9377197" target="_blank" class="btn btn-primary">-->
                        <i class="fas fa-map-marker-alt"></i> Cómo llegar
                    </a>
                </div>
            </div>

            <!-- Estilos personalizados -->
            <style>
                .star {
                    font-size: 1.5rem;
                    color: gray;
                    cursor: pointer;
                }
                .star:hover, .star.active {
                    color: gold;
                }
                .star.disabled {
                    pointer-events: none; /* Bloquea interacción */
                    opacity: 0.5; /* Reduce visibilidad */
                }
            </style>

            <!-- Script de interacción de estrellas -->
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const stars = document.querySelectorAll(".star");
                    const ratingText = document.getElementById("rating-text");
                    let isAuthenticated = <?php echo $isAuthenticated ? 'true' : 'false'; ?>;

                    if (!isAuthenticated) {
                        // Desactivar estrellas si el usuario no ha iniciado sesión
                        stars.forEach(star => {
                            star.classList.add("disabled");
                            star.addEventListener("click", function () {
                                alert("⚠ Primero inicia sesión para calificar.");
                            });
                        });
                    } else {
                        // Permitir calificación solo si está autenticado
                        stars.forEach(star => {
                            star.addEventListener("click", function () {
                                let value = this.getAttribute("data-value");

                                // Resaltar estrellas seleccionadas
                                stars.forEach(s => s.classList.remove("active"));
                                for (let i = 0; i < value; i++) {
                                    stars[i].classList.add("active");
                                }

                                // Actualizar texto de calificación
                                ratingText.innerText = `Calificación: ${value}/5`;
                            });
                        });
                    }
                });
            </script>
        </div>
    </div>
    <!-- Sección de video con diseño atractivo -->
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 text-center">
            <div class="video-container p-4 rounded shadow">
                <h4 class="mb-3 text-white">Explora la majestuosidad del Puente Colonial de Pachachaca</h4>
                <div class="video-wrapper">
                    <iframe class="w-100 rounded" height="400" 
                        src="https://www.youtube.com/embed/5cmLrYoaOcM" 
                        title="Puente Colonial de Pachachaca" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estilos para el reproductor de audio -->
<style>
    .audio-container {
        background: linear-gradient(135deg, #4CAF50, #2E7D32);
        border-radius: 15px;
        text-align: center;
    }
    .audio-container h4 {
        color: white;
        font-weight: bold;
    }
    audio {
        border-radius: 10px;
    }
</style>
<!-- Estilos personalizados para la sección de video -->
<style>
    .video-container {
        background: linear-gradient(135deg, #4CAF50, #2E7D32);
        border-radius: 15px;
        text-align: center;
    }
    .video-container h4 {
        color: white;
        font-weight: bold;
    }
    .video-wrapper {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    video {
        border-radius: 10px;
    }
</style>


        <!-- FAQs End -->

        <!-- Footer Start -->
        <?php include_once 'sections/footer.php';?> 
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
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