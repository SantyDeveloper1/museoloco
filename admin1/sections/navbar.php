<!-- Topbar Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-flex flex-wrap">
                <a href="#" class="text-muted small me-4">
                    <i class="fas fa-map-marker-alt text-primary me-2"></i>Ubicación
                </a>
                <a href="tel:+01234567890" class="text-muted small me-4">
                    <i class="fas fa-phone-alt text-primary me-2"></i>+51 936215487
                </a>
                <a href="mailto:example@gmail.com" class="text-muted small me-0">
                    <i class="fas fa-envelope text-primary me-2"></i>museoVirtual@gmail.com
                </a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="#"><small class="me-3 text-dark">
                    <i class="fa fa-user text-primary me-2"></i>Welcome <?php echo $nom_user;?></small>
                </a>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown">
                        <small><i class="fa fa-home text-primary me-2"></i> Panel de Control</small>
                    </a>
                    <div class="dropdown-menu rounded">
                        <!-- Botón para abrir el modal -->
                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#perfilModal">
                            <i class="fas fa-user-alt me-2"></i>Mi Perfil
                        </a>
                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#passModal">
                            <i class="fas fa-user-alt me-2"></i>Cambiar contraseña
                        </a>
                        <a href="../lib2/PHP_cerrar.php" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Perfil -->
<div class="modal fade" id="perfilModal" tabindex="-1" aria-labelledby="perfilModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="perfilModalLabel">Mi Perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nombreUsuario" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombreUsuario" value="<?php echo $nom_user;?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="emailUsuario" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="emailUsuario" value="museoVirtual@gmail.com" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="telefonoUsuario" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefonoUsuario" value="+51 936215487" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal de contraseña -->
<div class="modal fade" id="passModal" tabindex="-1" aria-labelledby="perfilModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="perfilModalLabel">Cambiar Contraseña</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nombreUsuario" class="form-label">Contraseña Actual</label>
                        <input type="text" class="form-control" id="nombreUsuario" value="<?php echo $nom_user;?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="emailUsuario" class="form-label">Contraseña Nueva</label>
                        <input type="email" class="form-control" id="emailUsuario" value="museoVirtual@gmail.com" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="telefonoUsuario" class="form-label">Repetir </label>
                        <input type="text" class="form-control" id="telefonoUsuario" value="+51 936215487" readonly>
                    </div>
                </form>
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
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">Acerca de </a>
                <a href="service.php" class="nav-item nav-link">Servicios</a>
                <a href="contact.html" class="nav-item nav-link">Contactactanos</a>
            </div>
            <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Empezar</a>
        </div>
    </nav>

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="img/abcy.jpeg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-lg-0 col-xl-5"></div>
                        <div class="col-xl-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">BIENVENIDO AL MUSEO VIRTUAL</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">Viaja con nosotros</h1>
                                <p class="mb-5 fs-5">"Explora el pasado, vive el presente y descubre el futuro en una experiencia inmersiva que 
                                    transforma la manera de visitar un museo. ¡Tu viaje comienza aquí!"</p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <!-- Botón para abrir el modal -->
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" data-bs-toggle="modal" data-bs-target="#videoModal">
                                        <i class="fas fa-play-circle me-2"></i> Ver video
                                    </a>
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Mas información</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                    <h2 class="text-white me-2">Siguenos:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="img/plaza.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-12 animated fadeInUp">
                            <div class="text-center">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Abancay, eterno valle primaveral </h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">Viaja con nosotros</h1>
                                <p class="mb-5 fs-5">"Explora el pasado, vive el presente y descubre el futuro en una experiencia inmersiva que transforma 
                                    la manera de visitar un museo. ¡Tu viaje comienza aquí!"</p>
                                <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                    <!-- Botón para abrir el modal -->
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" data-bs-toggle="modal" data-bs-target="#videoModal">
                                        <i class="fas fa-play-circle me-2"></i> Ver video
                                    </a>
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Mas información</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="text-white me-2">Siguenos:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
</div>

<!-- Modal para el video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Museo Virtual</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <video id="modalVideo" width="100%" controls muted>
                    <source src="img/museovideo.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar el video -->
<script>
document.getElementById('videoModal').addEventListener('shown.bs.modal', function () {
    var video = document.getElementById('modalVideo');
    video.play();
});

document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
    var video = document.getElementById('modalVideo');
    video.pause();
    video.currentTime = 0;
});
</script>