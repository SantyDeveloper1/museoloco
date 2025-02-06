<?php include_once 'seccion/t_inicio.php';?>  
    <body>

        <!-- Spinner Start -->
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <?php include_once 'seccion/topbar.php';?> 
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary"><i class=""></i>Museo</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">Acerca de</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link active" data-bs-toggle="dropdown">
                                <span class="class">Servicios</span>
                            </a>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contactactanos</a>
                    </div>
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Empezar</a>
                </div>
            </nav>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Cataratas De Umaturco</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active text-primary">Detalle de Umaturco</li>
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
                    <h4 class="mb-3 text-white">Escucha la majestuosidad de las Cataratas de Umaturco</h4>
                    <audio controls class="w-100">
                        <source src="audio/catarata.mp3" type="audio/mpeg">
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
                            <h1 class="display-5 mb-4">Cataratas De Umaturco</h1>
                            <p class="mb-4">
                                Las <strong>Cataratas de Umaturco</strong>, ubicadas en la región de <strong>Apurímac</strong>, cerca de la ciudad de <strong>Abancay</strong>, son un impresionante destino turístico que destaca por su belleza natural. Estas cataratas se encuentran en la zona Pampaccahuana de la comunidad campesina de La Unión, del distrito de Circa, una comunidad rural de la provincia de Abancay, y son uno de los atractivos más visitados de la región.
                            </p>
                            <p class="mb-4">
                                Con una caída de agua de aproximadamente <strong>50 metros</strong> de altura, las Cataratas de Umaturco son un espectáculo visual, rodeadas de una exuberante vegetación de la selva alta andina. El paisaje que las rodea, caracterizado por montañas y valles profundos, crea un ambiente único y tranquilo, ideal para los amantes de la naturaleza y el ecoturismo.
                            </p>
                            <p class="mb-4">
                                La zona alrededor de las cataratas es también un hábitat de diversas especies de flora y fauna, algunas de ellas endémicas de la región. Los turistas que visitan las cataratas pueden disfrutar de caminatas por senderos que atraviesan bosques nublados y áreas de gran biodiversidad. El acceso a las cataratas requiere de un recorrido algo exigente, lo que lo convierte en una experiencia única para quienes buscan aventura.
                            </p>
                            <p class="mb-4">
                                Además de la belleza natural, las Cataratas de Umaturco tienen un valor cultural para las comunidades locales, quienes consideran el área como parte de su herencia y tradición. Durante el recorrido hacia las cataratas, es posible observar algunas de las costumbres locales y el modo de vida de las familias que habitan en la región.
                            </p>
                            
                            <p class="mb-0">
                                📍 <strong>Ubicación:</strong> Las Cataratas de Umaturco pertenece al anexo de Pampaccahuana de la comunidad campesina de La Unión, del distrito de Circa, provincia de Abancay, Perú.
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
                            <img src="img/catarata1.png" class="d-block w-100 img-fluid" alt="Imagen 1">
                        </div>
                        <div class="carousel-item">
                            <img src="img/catarata2.png" class="d-block w-100 img-fluid" alt="Imagen 2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/catarata3.jpg" class="d-block w-100 img-fluid" alt="Imagen 3">
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
                    </div>
                    <!-- Botón "Cómo llegar" -->
                    <div class="text-center mt-2">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=-14.0575747,-72.8282708" target="_blank" class="btn btn-primary">
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
                </style>

                <!-- Script de interacción de estrellas -->
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const stars = document.querySelectorAll(".star");
                        const ratingText = document.getElementById("rating-text");

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
                        src="https://www.youtube.com/embed/Jc08jIzB7tw" 
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
        <script src="js/script.js?v=60225"></script>
    </body>
</html>