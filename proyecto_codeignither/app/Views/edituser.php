<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil de Usuario</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fc;
            color: #5a5c69;
        }
        
        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border-radius: 15px;
            margin-bottom: 2rem;
        }
        
        .navbar-brand {
            font-weight: 600;
            color: #4776E6;
        }
        
        .nav-link {
            color: #5a5c69;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            margin: 0 5px;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            background-color: #f1f5ff;
            color: #4776E6;
        }
        
        .nav-link.active {
            background: linear-gradient(to right, #4776E6, #8E54E9);
            color: white;
        }
        
        .page-header {
            background: linear-gradient(to right, #4776E6, #8E54E9);
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            overflow: hidden;
            margin-bottom: 2rem;
        }
        
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #f1f2f6;
            padding: 1.5rem;
            font-weight: 600;
        }
        
        .card-body {
            padding: 2rem;
        }
        
        .form-label {
            font-weight: 500;
            color: #4e5155;
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #e0e6ed;
            background-color: #f9fafc;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.15);
            border-color: #4e73df;
            background-color: #fff;
        }
        
        .form-text {
            color: #8898aa;
            font-size: 0.875rem;
        }
        
        .btn {
            border-radius: 10px;
            padding: 12px 20px;
            font-weight: 500;
            letter-spacing: 0.3px;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background: linear-gradient(to right, #4776E6, #8E54E9);
            border: none;
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.2);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(78, 115, 223, 0.3);
        }
        
        .btn-secondary {
            background-color: #f8f9fa;
            border: 1px solid #e0e6ed;
            color: #5a5c69;
        }
        
        .btn-secondary:hover {
            background-color: #e9ecef;
        }
        
        .nav-tabs {
            border-bottom: 1px solid #e0e6ed;
            margin-bottom: 1.5rem;
        }
        
        .nav-tabs .nav-link {
            border: none;
            color: #5a5c69;
            font-weight: 500;
            padding: 1rem 1.5rem;
            margin-right: 0.5rem;
            transition: all 0.3s;
        }
        
        .nav-tabs .nav-link.active {
            color: #4776E6;
            border-bottom: 3px solid #4776E6;
            background: transparent;
        }
        
        .nav-tabs .nav-link:hover:not(.active) {
            border-bottom: 3px solid #e0e6ed;
        }
        
        .user-profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(to right, #4776E6, #8E54E9);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            font-weight: 600;
            margin-right: 2rem;
            position: relative;
        }
        
        .profile-avatar-edit {
            position: absolute;
            bottom: 0;
            right: 0;
            background: white;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            color: #4776E6;
            transition: all 0.3s;
        }
        
        .profile-avatar-edit:hover {
            transform: scale(1.1);
        }
        
        .profile-info {
            flex: 1;
        }
        
        .user-details-item {
            margin-bottom: 1.5rem;
        }
        
        .form-switch .form-check-input {
            width: 3em;
            height: 1.5em;
            margin-top: 0.25rem;
        }
        
        .form-switch .form-check-input:checked {
            background-color: #4776E6;
            border-color: #4776E6;
        }
        
        .hr-text {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            color: #8898aa;
        }
        
        .hr-text::before, .hr-text::after {
            content: '';
            flex-grow: 1;
            background: #e0e6ed;
            height: 1px;
            margin: 0 1rem;
        }
        
        .alert {
            border-radius: 10px;
            border: none;
            padding: 15px;
        }
        
        .security-box {
            border: 1px solid #e0e6ed;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s;
        }
        
        .security-box:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-color: #4776E6;
        }
        
        .custom-file-upload {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        
        .custom-file-upload input[type=file] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        
        <!-- Header -->
        <div class="page-header d-flex justify-content-between align-items-center">
            <div>
                <h2 class="fw-bold mb-1">Editar Perfil de Usuario</h2>
                <p class="mb-0">Actualiza la información del perfil</p>
            </div>
            <a href="<?= base_url('/pantalla') ?>" class="btn btn-light">
                <i class="fas fa-arrow-left me-2"></i>Volver
            </a>
        </div>
        
        <!-- Contenido principal -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <?php 
                        // Aquí asumimos que $user contiene la información del usuario
                        $username = isset($user['username']) ? $user['username'] : 'Usuario';
                        $email = isset($user['email']) ? $user['email'] : 'correo@ejemplo.com';
                        $status = isset($user['status']) ? $user['status'] : true;
                        $initial = strtoupper(substr($username, 0, 1));
                        ?>
                        
                        <div class="d-flex flex-column align-items-center">
                            <div class="profile-avatar">
                                <?= $initial ?>
                                <div class="profile-avatar-edit">
                                    <label class="custom-file-upload">
                                        <input type="file" name="profile_image">
                                        <i class="fas fa-camera"></i>
                                    </label>
                                </div>
                            </div>
                            <h5 class="mt-3 mb-0"><?= esc($username) ?></h5>
                            <p class="text-muted mb-1"><?= esc($email) ?></p>
                        </div>
                        <hr class="my-4">                        
                        <div class="security-box">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0">Eliminar cuenta</h6>
                                    <small class="text-muted">Eliminar permanentemente esta cuenta</small>
                                </div>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar" data-id="<?= $user['id'] ?>">
                                    <i class="fas fa-trash me-1"></i>Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-8">
                <!-- Pestañas de navegación -->
                <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">
                            <i class="fas fa-user me-2"></i>Información personal
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab">
                            <i class="fas fa-lock me-2"></i>Seguridad
                        </button>
                    </li>
                </ul>
                
                <!-- Contenido de las pestañas -->
                <div class="tab-content" id="profileTabsContent">
                    <!-- Pestaña de información personal -->
                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="card">
                            <div class="card-header">
                                <i class="fas fa-user-edit me-2"></i>Editar información personal
                            </div>
                            <div class="card-body">
                                <?php if (session()->getFlashdata('msg')): ?>
                                <div class="alert alert-success">
                                    <i class="fas fa-check-circle me-2"></i><?= session()->getFlashdata('msg') ?>
                                </div>
                                <?php endif; ?>
                                
                                <form action="<?= base_url('user/actualizar') ?>" method="post">
                                <input type="hidden" name="user_id" value="<?= isset($user['id']) ? $user['id'] : '' ?>">
                                    <div class="row mb-3">
                                        <div class="col-md-12 user-details-item">
                                            <label for="nombre" class="form-label">Nombre completo</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= isset($user['full_name']) ? esc($user['full_name']) : '' ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6 user-details-item">
                                            <label for="username" class="form-label">Nombre de usuario</label>
                                            <input type="text" class="form-control" id="username" name="username" value="<?= esc($username) ?>" required>
                                        </div>
                                        
                                        <div class="col-md-6 user-details-item">
                                            <label for="email" class="form-label">Correo electrónico</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?= esc($email) ?>" required>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="button" class="btn btn-secondary me-2">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save me-2"></i>Guardar cambios
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pestaña de seguridad -->
                    <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                        <div class="card">
                            <div class="card-header">
                                <i class="fas fa-shield-alt me-2"></i>Cambiar contraseña
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('/user/edit_password') ?>" method="post">
                                    <input type="hidden" name="user_id" value="<?= isset($user['id']) ? $user['id'] : '' ?>">
                                    
                                    <div class="mb-3">
                                        <label for="current_password" class="form-label">Contraseña actual</label>
                                        <input type="password" class="form-control" id="current_password" name="current_password" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">Nueva contraseña</label>
                                        <input type="password" class="form-control" id="new_password" name="new_password" required>
                                        <div class="form-text">
                                            La contraseña debe tener al menos 8 caracteres e incluir letras y números.
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="confirm_password" class="form-label">Confirmar nueva contraseña</label>
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                    </div>
                                    
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="button" class="btn btn-secondary me-2">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-key me-2"></i>Actualizar contraseña
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Eliminar -->
    <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" id="formEliminar" action="">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEliminarLabel">Eliminar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este usuario?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
            </div>
        </form>
    </div>
    </div>

    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Validación de contraseñas
        var newPassword = document.getElementById('new_password');
        var confirmPassword = document.getElementById('confirm_password');
        
        function validatePassword(){
            if(newPassword.value != confirmPassword.value) {
                confirmPassword.setCustomValidity("Las contraseñas no coinciden");
            } else {
                confirmPassword.setCustomValidity('');
            }
        }
        
        if(newPassword && confirmPassword) {
            newPassword.onchange = validatePassword;
            confirmPassword.onkeyup = validatePassword;
        }
        
        // Toggle para mostrar/ocultar contraseña (opcional)
        var togglePasswordVisibility = function(inputId) {
            var passwordInput = document.getElementById(inputId);
            if(passwordInput) {
                var eyeIcon = document.createElement('i');
                eyeIcon.className = 'fas fa-eye position-absolute';
                eyeIcon.style.right = '15px';
                eyeIcon.style.top = '50%';
                eyeIcon.style.transform = 'translateY(-50%)';
                eyeIcon.style.cursor = 'pointer';
                eyeIcon.style.color = '#4776E6';
                
                passwordInput.parentElement.style.position = 'relative';
                passwordInput.parentElement.appendChild(eyeIcon);
                
                eyeIcon.addEventListener('click', function() {
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        eyeIcon.className = 'fas fa-eye-slash position-absolute';
                    } else {
                        passwordInput.type = 'password';
                        eyeIcon.className = 'fas fa-eye position-absolute';
                    }
                });
            }
        };
        
        togglePasswordVisibility('current_password');
        togglePasswordVisibility('new_password');
        togglePasswordVisibility('confirm_password');
    });
    </script>
</body>
</html>