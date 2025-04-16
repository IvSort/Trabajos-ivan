<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
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
        
        .signup-img {
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
        
        .error-shake {
            animation: shake 0.5s;
        }
        
        @keyframes shake {
            0%, 100% {transform: translateX(0);}
            10%, 30%, 50%, 70%, 90% {transform: translateX(-5px);}
            20%, 40%, 60%, 80% {transform: translateX(5px);}
        }
        
        .help-text {
            font-size: 0.8rem;
            color: #666;
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
                                    <h4>Crea tu cuenta</h4>
                                    <p class="mb-0">Únete a nuestra comunidad en pocos pasos</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="mensaje" class="mb-3">
                                    <!-- Aquí se mostrarán los mensajes de error o éxito -->
                                </div>
                                
                                <form id="registerForm" class="needs-validation" method="post" action="<?= base_url('register/save') ?>" novalidate>
                                    <div class="mb-3 position-relative">
                                        <label for="nombre" class="form-label">Nombre completo</label>
                                        <div class="position-relative">
                                            <i class="fas fa-user icon-input"></i>
                                            <input type="text" class="form-control input-with-icon" id="nombre" name="nombre" required>
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor ingrese su nombre.
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 position-relative">
                                        <label for="email" class="form-label">Correo electrónico</label>
                                        <div class="position-relative">
                                            <i class="fas fa-envelope icon-input"></i>
                                            <input type="email" class="form-control input-with-icon" id="email" name="email" required>
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor ingrese un correo electrónico válido.
                                        </div>
                                    </div>

                                    <div class="mb-3 position-relative">
                                        <label for="nombre" class="form-label">Nombre de Usuario</label>
                                        <div class="position-relative">
                                            <i class="fas fa-user icon-input"></i>
                                            <input type="text" class="form-control input-with-icon" id="usuario" name="usuario" required>
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor ingrese su usuario.
                                        </div>
                                    </div>

                                    <div class="mb-3 position-relative">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <div class="position-relative">
                                            <i class="fas fa-lock icon-input"></i>
                                            <input type="password" class="form-control input-with-icon" id="password" name="password" required minlength="8">
                                        </div>
                                        <div class="invalid-feedback">
                                            La contraseña debe tener al menos 8 caracteres.
                                        </div>
                                        <div class="help-text mt-1">
                                            <i class="fas fa-info-circle"></i> Mínimo 8 caracteres con números y letras
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 position-relative">
                                        <label for="confirm_password" class="form-label">Confirmar contraseña</label>
                                        <div class="position-relative">
                                            <i class="fas fa-lock icon-input"></i>
                                            <input type="password" class="form-control input-with-icon" id="confirm_password" name="confirm_password" required>
                                            <small id="passwordMatchMessage" class="form-text"></small>
                                        </div>
                                        <div class="invalid-feedback">
                                            Las contraseñas no coinciden.
                                        </div>
                                    </div>
                                    
                                    <div class="d-grid gap-2 mb-4">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="fas fa-user-plus me-2"></i>Crear cuenta
                                        </button>
                                    </div>
                                    
                                    <div class="divider">
                                        <div class="divider-line"></div>
                                        <span class="divider-text">¿Ya tienes una cuenta?</span>
                                        <div class="divider-line"></div>
                                    </div>
                                                         
                                    <div class="text-center">
                                        <p class="mb-0"><a href="login.php" class="text-decoration-none fw-bold">Iniciar sesión</a></p>
                                    </div>
                                </form>
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
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registerForm');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm_password');
    const mensaje = document.getElementById('mensaje');
    const passwordMatchMessage = document.getElementById('passwordMatchMessage');

    // Validación en tiempo real
    function validatePasswordMatch() {
        if (confirmPassword.value === '') {
            passwordMatchMessage.textContent = '';
            passwordMatchMessage.className = 'form-text';
            return;
        }

        if (password.value === confirmPassword.value) {
            confirmPassword.setCustomValidity('');
            passwordMatchMessage.textContent = '✅ Las contraseñas coinciden';
            passwordMatchMessage.className = 'form-text text-success';
        } else {
            confirmPassword.setCustomValidity('Las contraseñas no coinciden');
            passwordMatchMessage.textContent = '❌ Las contraseñas no coinciden';
            passwordMatchMessage.className = 'form-text text-danger';
        }
    }

    password.addEventListener('input', validatePasswordMatch);
    confirmPassword.addEventListener('input', validatePasswordMatch);

    // Validación y envío
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita envío si no es válido

        if (!form.checkValidity()) {
            event.stopPropagation();
            form.classList.add('was-validated');
            return;
        }

        // Si quieres usar AJAX (opcional, descomenta y adapta):
        /*
        const formData = new FormData(form);
        fetch(form.action, {
            method: 'POST',
            body: formData
        }).then(response => response.json())
          .then(data => {
              mensaje.innerHTML = '<div class="alert alert-success">Registro exitoso</div>';
              form.reset();
          }).catch(error => {
              mensaje.innerHTML = '<div class="alert alert-danger">Error al registrar</div>';
          });
        */

        // O si quieres redirigir normalmente:
        form.submit();
    });
});
</script>


</body>
</html>