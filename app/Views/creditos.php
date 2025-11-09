<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Créditos del Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }
        .developer-name {
            color: #0d6efd;
            font-weight: bold;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <header class="bg-dark text-white py-3 mb-4">
        <div class="container text-center">
            <h1 class="h3">Créditos del Proyecto - Refugio de Animales</h1>
        </div>
    </header>

    <main class="flex-fill">
        <div class="container my-5">
            <h2 class="text-center mb-5 text-primary fw-bold">Equipo de Desarrollo</h2>

            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h5 class="developer-name">German de Paz</h5>
                            <p class="mb-1"><strong>Carnet:</strong> 202305757</p>
                            <p class="mb-1"><strong>Rol:</strong> Desarrollador</p>
                            <p class="mb-2"><strong>Procesos trabajados:</strong></p>
                            <ul class="text-muted">
                                <li>Módulo de Usuarios</li>
                                <li>Módulo de Adoptantes</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h5 class="developer-name">Lennin Cardona</h5>
                            <p class="mb-1"><strong>Carnet:</strong> 200417587</p>
                            <p class="mb-1"><strong>Rol:</strong> Desarrollador</p>
                            <p class="mb-2"><strong>Procesos trabajados:</strong></p>
                            <ul class="text-muted">
                                <li>Módulo de Citas</li>
                                <li>Módulo de Mascotas</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h5 class="developer-name">Pablo Sontay</h5>
                            <p class="mb-1"><strong>Carnet:</strong> 4574</p>
                            <p class="mb-1"><strong>Rol:</strong> Desarrollador</p>
                            <p class="mb-2"><strong>Procesos trabajados:</strong></p>
                            <ul class="text-muted">
                                <li>Módulo de Solicitudes</li>
                                <li>Módulo de Historial Médico</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h5 class="developer-name">Álvaro Calderon</h5>
                            <p class="mb-1"><strong>Carnet:</strong> 4584</p>
                            <p class="mb-1"><strong>Rol:</strong> Desarrollador</p>
                            <p class="mb-2"><strong>Procesos trabajados:</strong></p>
                            <ul class="text-muted">
                                <li>Diseño de la Página Principal</li>
                                <li>Menú de Navegación y Acceso</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <div class="text-center">
                <h5 class="fw-bold">Universidad de San Carlos de Guatemala</h5>
                <p class="text-muted mb-1">EFPEM - Escuela de Formación de Profesores de Enseñanza Media</p>
                <p class="text-muted mb-0">Proyecto Final - Desarrollo de Procesos CRUD Web | 2025</p>
            </div>
        </div>
    </main>

    <footer class="text-muted py-4 bg-dark text-white mt-auto">
        <div class="container text-center">
            <p class="mb-1">&copy; 2025 Organización Refugio Animales. Todos los derechos reservados.</p>
            <p class="mb-0">
                <a href="<?= base_url('/') ?>" class="text-white">Inicio</a> |
                <a href="#" class="text-white">Política de Privacidad</a> |
                <a href="<?= base_url('creditos') ?>" class="text-white">Créditos</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
