<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 15px 25px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .card-header {
            background: #4776E6;
            background: linear-gradient(to right, #4776E6, #8E54E9);
            padding: 1.5rem;
            border-bottom: none;
        }
        
        .card-header h4 {
            font-weight: 600;
        }
        
        .card-body {
            padding: 2rem;
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
        
        .btn-primary {
            background: linear-gradient(to right, #4776E6, #8E54E9);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 500;
            letter-spacing: 0.5px;
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.3);
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(78, 115, 223, 0.4);
        }
        
        .btn-outline-secondary {
            border-radius: 10px;
            padding: 12px;
            font-weight: 500;
            border: 1px solid #e0e6ed;
            transition: all 0.3s;
        }
        
        .btn-outline-secondary:hover {
            background-color: #f8f9fa;
        }
        
        .form-label {
            font-weight: 500;
            color: #555;
        }
        
        .input-group-text {
            background-color: #f9fafc;
            border: 1px solid #e0e6ed;
            border-radius: 10px 0 0 10px;
        }
        
        .logo-container {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        .logo {
            max-width: 120px;
            margin-bottom: 1rem;
        }
        
        .login-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .form-check-input:checked {
            background-color: #4e73df;
            border-color: #4e73df;
        }
        
        .icon-input {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 15px;
            color: #8E54E9;
        }
        
        .input-with-icon {
            padding-left: 40px;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 1.5rem 0;
        }
        
        .divider-line {
            flex-grow: 1;
            height: 1px;
            background-color: #e0e6ed;
        }
        
        .divider-text {
            padding: 0 1rem;
            color: #777;
            font-size: 0.9rem;
        }
        
        .social-btn {
            border-radius: 10px;
            padding: 10px;
            font-weight: 500;
            margin: 0 5px;
            flex: 1;
        }
        
        .btn-google {
            background-color: #ea4335;
            color: white;
        }
        
        .btn-facebook {
            background-color: #3b5998;
            color: white;
        }
        
        .alert {
            border-radius: 10px;
            border: none;
            padding: 15px;
        }
        
        .forgot-password {
            text-align: right;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }
        
        .welcome-text {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #777;
        }
        
        .btn-lg {
            padding: 12px 20px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-header text-white">
                                <div class="logo-container">
                                    <img src="<?= base_url('img/photos/formulario.jpg') ?>"alt="Logo" style="width: 10rem">
                                    <h4>Iniciar Sesión</h4>
                                    <p class="mb-0">Bienvenido de nuevo</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php if (session()->getFlashdata('msg')): ?>
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle me-2"></i><?= session()->getFlashdata('msg') ?>
                                </div>
                                <?php endif; ?>
                                
                                <p class="welcome-text text-center">Accede a tu cuenta para continuar</p>
                                
                                <form action="<?= base_url('/auth/loginAuth') ?>" method="post">
                                    <div class="mb-3 position-relative">
                                        <label for="username" class="form-label">Usuario</label>
                                        <div class="position-relative">
                                            <i class="fas fa-user icon-input"></i>
                                            <input type="text" class="form-control input-with-icon" id="username" name="username" placeholder="Ingrese su usuario" required>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-2 position-relative">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <div class="position-relative">
                                            <i class="fas fa-lock icon-input"></i>
                                            <input type="password" class="form-control input-with-icon" id="password" name="password" placeholder="Ingrese su contraseña" required>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4 d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="remember">
                                            <label class="form-check-label" for="remember">Recordarme</label>
                                        </div>
                                        <div class="forgot-password">
                                            <a href="#" class="text-decoration-none">¿Olvidó su contraseña?</a>
                                        </div>
                                    </div>
                                    
                                    <div class="d-grid gap-2 mb-4">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="fas fa-sign-in-alt me-2"></i>Ingresar
                                        </button>
                                    </div>
                                </form>
                                
                                <div class="divider">
                                    <div class="divider-line"></div>
                                    <span class="divider-text">¿No tienes una cuenta? </span>
                                    <div class="divider-line"></div>
                                </div>
                                
                                <div class="text-center">
                                        <form action="<?= base_url('/register') ?>" method="get" class="d-inline">
                                            <button type="submit" class="btn btn-link text-decoration-none p-0 fw-bold">Registrarse</button>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Animaciones y efectos visuales
    document.addEventListener('DOMContentLoaded', function() {
        // Añadir efecto de animación a los campos de entrada
        var inputs = document.querySelectorAll('.form-control');
        inputs.forEach(function(input) {
            input.addEventListener('focus', function() {
                this.parentElement.closest('.mb-3, .mb-2').classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.closest('.mb-3, .mb-2').classList.remove('focused');
            });
        });
        
        // Mostrar/ocultar contraseña (opcional)
        var passwordInput = document.getElementById('password');
        if (passwordInput) {
            var eyeIcon = document.createElement('i');
            eyeIcon.className = 'fas fa-eye position-absolute';
            eyeIcon.style.right = '15px';
            eyeIcon.style.top = '50%';
            eyeIcon.style.transform = 'translateY(-50%)';
            eyeIcon.style.cursor = 'pointer';
            eyeIcon.style.color = '#8E54E9';
            
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
    });
    </script>
</body>
</html>