<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
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
        }
        
        .header-actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table thead {
            background: linear-gradient(to right, #4776E6, #8E54E9);
            color: white;
        }
        
        .table thead th {
            border: none;
            padding: 1rem;
            font-weight: 500;
        }
        
        .table tbody tr:nth-of-type(odd) {
            background-color: #f9fafc;
        }
        
        .table tbody tr:hover {
            background-color: #f1f5ff;
            transition: all 0.3s;
        }
        
        .table td {
            vertical-align: middle;
            padding: 0.75rem 1rem;
            border-color: #f1f2f6;
        }
        
        .btn-primary {
            background: linear-gradient(to right, #4776E6, #8E54E9);
            border: none;
            border-radius: 10px;
            font-weight: 500;
            box-shadow: 0 2px 10px rgba(78, 115, 223, 0.2);
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.3);
        }
        
        .btn-danger {
            background: linear-gradient(to right, #ff5f6d, #ffc371);
            border: none;
            border-radius: 10px;
            font-weight: 500;
            box-shadow: 0 2px 10px rgba(255, 95, 109, 0.2);
            transition: all 0.3s;
        }
        
        .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 95, 109, 0.3);
        }
        
        .btn-success {
            background: linear-gradient(to right, #32be8f, #38ef7d);
            border: none;
            border-radius: 10px;
            font-weight: 500;
            box-shadow: 0 2px 10px rgba(50, 190, 143, 0.2);
            transition: all 0.3s;
        }
        
        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(50, 190, 143, 0.3);
        }
        
        .btn-sm {
            padding: 0.4rem 0.8rem;
        }
        
        .search-box {
            position: relative;
            margin-bottom: 1rem;
        }
        
        .search-input {
            padding-left: 40px;
            border-radius: 10px;
            border: 1px solid #e0e6ed;
            background-color: #f9fafc;
            transition: all 0.3s;
        }
        
        .search-input:focus {
            box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.15);
            border-color: #4e73df;
            background-color: #fff;
        }
        
        .search-icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #6c757d;
        }
        
        .pagination {
            justify-content: center;
            margin-top: 1.5rem;
        }
        
        .page-item.active .page-link {
            background: linear-gradient(to right, #4776E6, #8E54E9);
            border-color: #4776E6;
        }
        
        .page-link {
            color: #4776E6;
            border-radius: 5px;
            margin: 0 3px;
        }
        
        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #b7b9cc;
        }
        
        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(to right, #4776E6, #8E54E9);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-right: 0.75rem;
        }
        
        .user-info {
            display: flex;
            align-items: center;
        }
        
        .status-active {
            width: 10px;
            height: 10px;
            background-color: #1cc88a;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }
        
        .status-inactive {
            width: 10px;
            height: 10px;
            background-color: #e74a3b;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }
        
        .badge-role {
            background-color: #f6f8fa;
            color: #4776E6;
            border-radius: 20px;
            padding: 0.3rem 0.8rem;
            font-weight: 500;
            font-size: 0.75rem;
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
    </style>
</head>
<body>
    <div class="container py-4">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand" href="#">
                    <i class="fas fa-user-shield me-2"></i>
                    Panel de Administración
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <div class="nav-link active" href="#">
                                <i class="fas fa-users me-1"></i> Usuarios
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-sign-out-alt me-1"></i> Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Header -->
        <div class="page-header d-flex justify-content-between align-items-center">
            <div>
                <h2 class="fw-bold mb-1">Usuarios Registrados</h2>
                <p class="mb-0">Administra los usuarios del sistema</p>
            </div>
            <button class="btn btn-success">
                <i class="fas fa-user-plus me-2"></i>Nuevo Usuario
            </button>
        </div>
        
        <!-- Contenido principal -->
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th style="width: 30%">Nombre</th>
                                <th style="width: 20%">Usuario</th>
                                <th style="width: 15%">Correo</th>
                                <th style="width: 10%">Contraseña</th>
                                <th style="width: 20%">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($users)) : ?>
                            <?php foreach ($users as $index => $user) : ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <div class="user-info">
                                            <div class="user-avatar">
                                                <?= strtoupper(substr($user['username'], 0, 1)) ?>
                                            </div>
                                            <div>
                                                <?= esc($user['username']) ?>
                                                <div class="text-muted small">
                                                    <?= isset($user['email']) ? esc($user['email']) : 'No disponible' ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <?= esc($user['username']) ?>
                                    </td>
                                    <td>
                                        <?= esc($user['email']) ?>
                                    </td>
                                    <td>
                                        <?= esc($user['username']) ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('users/edit/' . $user['id']) ?>" class="btn btn-sm btn-primary me-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar" data-id="<?= $user['id'] ?>">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="6">
                                    <div class="empty-state">
                                        <i class="fas fa-users-slash"></i>
                                        <h5>No hay usuarios registrados</h5>
                                        <p>Comienza agregando nuevos usuarios al sistema</p>
                                        <button class="btn btn-primary">
                                            <i class="fas fa-user-plus me-2"></i>Agregar Usuario
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
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
document.addEventListener('DOMContentLoaded', function () {
    var modalEliminar = document.getElementById('modalEliminar');
    modalEliminar.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var userId = button.getAttribute('data-id');
        var form = modalEliminar.querySelector('#formEliminar');
        form.action = "<?= base_url('usuarios/eliminar/') ?>" + userId;
    });
});
</script>

</body>
</html>