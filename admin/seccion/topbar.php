
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
                <h2 class="modal-title text-center text-danger">Actualizar Perfil de Usuario</h2>
            </div>
            <div class="modal-body">
                <form id="form_perfil" class="form-horizontal">
                    
                    <!-- Fila 1: Nombre y Apellidos -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Nombres</label>
                            <input type="text" name="nom" value="<?php echo $nom_user;?>" class="form-control" placeholder="Nombre del Usuario">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Apellido Paterno</label>
                            <input type="text" name="app" value="<?php echo $app_user;?>" class="form-control" placeholder="Apellido Paterno">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Apellido Materno</label>
                            <input type="text" name="apm" value="<?php echo $apm_user;?>" class="form-control" placeholder="Apellido Materno">
                        </div>
                    </div>

                    <!-- Fila 2: Correo y Celular -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" name="ema" value="<?php echo $ema_user;?>" class="form-control" placeholder="Correo Electrónico">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Celular</label>
                            <input type="text" pattern="[0-9]*" name="cel" value="<?php echo $cel_user;?>" class="form-control" placeholder="Celular">
                        </div>
                    </div>

                    <!-- Fila 3: Género -->
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label class="form-label">Sexo</label>
                            <div class="form-check form-check-inline ms-3">
                                <input type="radio" name="sex" value="M" class="form-check-input" <?php echo $masculino;?>>
                                <label class="form-check-label">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="sex" value="F" class="form-check-input" <?php echo $feminino;?>>
                                <label class="form-check-label">Femenino</label>
                            </div>
                        </div>
                    </div>
                    <!-- Mensajes de validación -->
                    <div class="row">
                        <div class="col-md-12" id="div_perfil"></div>
                    </div>
                    <!-- Botones -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>

                </form>
            </div>                                
        </div>
    </div>
</div>

<!-- Modal de Contraseña -->
<div class="modal fade" id="passModal" tabindex="-1" aria-labelledby="passModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Encabezado del Modal -->
            <div class="modal-header">
                <h2 class="modal-title text-center text-danger">Cambiar Contraseña</h2>
            </div>
            <!-- Cuerpo del Modal -->
            <div class="modal-body">
                <form id="form_password" class="form-horizontal">    
                    <!-- Contraseña Actual -->
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="current_password" class="form-label">Contraseña Actual</label>
                            <input type="password" id="current_password" name="pass" class="form-control" placeholder="Ingrese Contraseña Actual">
                        </div>
                    </div>
                    <!-- Contraseña Nueva -->
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="new_password" class="form-label">Contraseña Nueva</label>
                            <input type="password" id="new_password" name="pass1" class="form-control" placeholder="Ingrese Contraseña Nueva">
                        </div>
                    </div>
                    <!-- Repetir Contraseña -->
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="confirm_password" class="form-label">Repite la Contraseña</label>
                            <input type="password" id="confirm_password" name="pass2" class="form-control" placeholder="Repite Contraseña Nueva">
                        </div>
                    </div>
                    <!-- Mensajes de validación -->
                    <div class="row">
                        <div class="col-md-12" id="div_pass"></div>
                    </div>
                    <!-- Botones de acción -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>