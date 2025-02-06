<?php include_once 'sections/t_inicio.php';?>  
    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <?php include_once 'sections/navbar.php';?> 
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
         
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h2>Museo Virtual - Mapa Interactivo</h2>
                            <div id="map"></div>
                            <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
                            <script>// Inicializar el mapa
                                var map = L.map('map').setView([-13.6374597, -72.8791429], 15); // Coordenadas de ejemplo
                                
                                // Cargar el mapa desde OpenStreetMap
                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                    attribution: '&copy; OpenStreetMap contributors'
                                }).addTo(map);
                                
                                // Coordenadas del museo
                                var lat = -13.6374597;
                                var lon = -72.8791429;
                                
                                // Agregar un marcador con evento de clic
                                var marker = L.marker([lat, lon]).addTo(map)
                                .bindPopup("<b>Plaza de Armas - Abancay </b><br><a href='https://www.google.com/maps?q=" + lat + "," + lon + "' target='_blank'>Abrir en Google Maps</a>")
                                .openPopup();
                                
                                // Coordenadas Ampay
                                var lat = -13.5755972;
                                var lon = -72.8875891;
                                
                                // Agregar un marcador con evento de clic
                                var marker = L.marker([lat, lon]).addTo(map)
                                .bindPopup("<b>Santuario nacional Ampay </b><br><a href='https://www.google.com/maps?q=" + lat + "," + lon + "' target='_blank'>Abrir en Google Maps</a>")
                                .openPopup();

                                // Coordenadas Ex-Casa Hacienda Illanya
                                var lat = -13.6509514;
                                var lon = -72.9015541;
                                
                                // Agregar un marcador con evento de clic
                                var marker = L.marker([lat, lon]).addTo(map)
                                .bindPopup("<b>Ex-Casa Hacienda Illanya </b><br><a href='https://www.google.com/maps?q=" + lat + "," + lon + "' target='_blank'>Abrir en Google Maps</a>")
                                .openPopup();

                                // Coordenadas Puente colonial Pachachaca
                                var lat = -13.6632272;
                                var lon = -72.9374089;
                                
                                // Agregar un marcador con evento de clic
                                var marker = L.marker([lat, lon]).addTo(map)
                                .bindPopup("<b>Puente colonial Pachachaca </b><br><a href='https://www.google.com/maps?q=" + lat + "," + lon + "' target='_blank'>Abrir en Google Maps</a>")
                                .openPopup();

                                // Coordenadas Piedra de Saymite
                                var lat = -13.5472427;
                                var lon = -72.8033504;
                                
                                // Agregar un marcador con evento de clic
                                var marker = L.marker([lat, lon]).addTo(map)
                                .bindPopup("<b>Piedra de Saymite </b><br><a href='https://www.google.com/maps?q=" + lat + "," + lon + "' target='_blank'>Abrir en Google Maps</a>")
                                .openPopup();

                                // Coordenadas Cataratas De Umaturco
                                var lat = -14.0576343;
                                var lon = -72.8283874;
                                
                                // Agregar un marcador con evento de clic
                                var marker = L.marker([lat, lon]).addTo(map)
                                .bindPopup("<b>Piedra de Saymite </b><br><a href='https://www.google.com/maps?q=" + lat + "," + lon + "' target='_blank'>Abrir en Google Maps</a>")
                                .openPopup();

                                // Coordenadas Casa hacienda Yaca
                                var lat = -13.8509232;
                                var lon = -72.977675;
                            
                                // Agregar un marcador con evento de clic
                                var marker = L.marker([lat, lon]).addTo(map)
                                .bindPopup("<b>Casa hacienda Yaca </b><br><a href='https://www.google.com/maps?q=" + lat + "," + lon + "' target='_blank'>Abrir en Google Maps</a>")
                                .openPopup();  
                            </script>
                            <h4 class="text-primary">Sobre nosotros</h4>
                            <h1 class="display-5 mb-4">Conozca nuestro museo virtual</h1>
                            <p class="mb-4">🖼️ Descubre el Museo del Futuro: Una Experiencia Virtual Inigualable 🌍</p>

                            <p class="mb-4">Sumérgete en un recorrido único donde la historia, el arte y la cultura cobran vida de manera interactiva. Con nuestro Museo Virtual, explora exposiciones en 3D, accede a contenido exclusivo y vive una experiencia envolvente desde cualquier lugar.

                            </p>
                                <p class="mb-4">🔹 Explora salas temáticas con detalles sorprendentes. </p>
                                <p class="mb-4">🔹 Interactúa con piezas de arte y objetos históricos en alta resolución. </p>
                                <p class="mb-4">🔹 Aprende a tu propio ritmo con información enriquecida y multimedia. </p>
                                <p class="mb4">¡Atrévete a descubrir el museo como nunca antes lo imaginaste! 🚀✨</p>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded position-relative overflow-hidden">
                            <img src="img/logo_abc23.png" class="img-fluid rounded w-100" alt="">
                            
                            <div class="" style="position: absolute; top: -15px; right: -15px;">
                                <img src="img/logomv.png" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="">
                            </div>
                            <!--<div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                                <img src="img/icon.png" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="">
                            </div>-->
                            <div class="rounded-bottom">
                                <img src="img/museov.jpg" class="img-fluid rounded-bottom w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

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

        <!-- Features Start -->
        
        <!-- Features End -->

        <!-- Offer Start -->
        
        <!-- Offer End -->

        <!-- Blog Start -->
        
        <!-- Blog End -->
        <!-- FAQs Start -->

        <!-- FAQs End -->
        <!-- Team Start -->
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Nuestro equipo</h4>
                    <h1 class="display-5 mb-4">Conozca a nuestros asesores</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/limas3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">Dany Santiago</h4>
                                <p class="mb-0">Ingeniro en Sistemas</p>
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

        <!-- Testimonial Start -->
        <!-- Testimonial End -->
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