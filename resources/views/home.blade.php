@extends('layouts.app')

@section('content')
    <div class="container-fluid px-0">

        <!-- CARRUSEL ESYMATRIC -->
        <div id="esymatricCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <!-- Indicadores -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#esymatricCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#esymatricCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#esymatricCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#esymatricCarousel" data-bs-slide-to="3"></button>
            </div>

            <div class="carousel-inner">

                <!-- IMAGEN 1: BIENVENIDA -->
                <div class="carousel-item active">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655" class="d-block w-100" style="height:600px; object-fit:cover;" alt="Plataforma Esymatric">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.60);"></div>
                    </div>
                    <div class="carousel-caption">
                        <h1 class="display-4 fw-bold">ESYMATRIC</h1>
                        <p class="fs-5">Sistema Integral de Gestión Académica y Matrículas</p>
                        <a href="{{ route('enrollments.create') }}" class="btn btn-primary btn-lg px-5 shadow">Registrar Matrícula</a>
                    </div>
                </div>

                <!-- IMAGEN 2: ESTUDIANTES Y MATRÍCULAS -->
                <div class="carousel-item">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" class="d-block w-100" style="height:600px; object-fit:cover;" alt="Matrículas Académicas">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);"></div>
                    </div>
                    <div class="carousel-caption">
                        <h1 class="display-4 fw-bold">Gestión de Matrículas</h1>
                        <p class="fs-5">Controla requisitos, módulos y estado de cada estudiante fácilmente</p>
                        <a href="{{ route('enrollments.index') }}" class="btn btn-light btn-lg px-5 shadow">Ver Matrículas</a>
                    </div>
                </div>

                <!-- IMAGEN 3: EVALUACIÓN Y CALIFICACIONES -->
                <div class="carousel-item">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173" class="d-block w-100" style="height:600px; object-fit:cover;" alt="Calificaciones y Notas">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);"></div>
                    </div>
                    <div class="carousel-caption">
                        <h1 class="display-4 fw-bold">Seguimiento Académico</h1>
                        <p class="fs-5">Registra y administra calificaciones por materia y tipo de evaluación</p>
                        <a href="{{ route('grades.index') }}" class="btn btn-primary btn-lg px-5 shadow">Ver Calificaciones</a>
                    </div>
                </div>

                <!-- IMAGEN 4: MÓDULOS Y PLANES -->
                <div class="carousel-item">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3" class="d-block w-100" style="height:600px; object-fit:cover;" alt="Programas Educativos">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);"></div>
                    </div>
                    <div class="carousel-caption">
                        <h1 class="display-4 fw-bold">Estructura Curricular</h1>
                        <p class="fs-5">Organiza los módulos de formación y las asignaturas de tu institución</p>
                        <a href="{{ route('grades.create') }}" class="btn btn-light btn-lg px-5 shadow">Nueva Nota</a>
                    </div>
                </div>

            </div>

            <!-- Controles del carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#esymatricCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#esymatricCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

    </div>

    <!-- SECCIÓN DE MÓDULOS PRINCIPALES DEL SISTEMA -->
    <div class="container py-5">
        
        <div class="text-center mb-5">
            <span class="badge bg-primary px-3 py-2 fs-6 mb-2">Panel Administrativo</span>
            <h2 class="fw-bold text-dark display-6">Módulos del Sistema Esymatric</h2>
            <p class="text-muted">Accede rápidamente a las opciones principales de la gestión académica</p>
            <hr class="w-25 mx-auto text-primary border-2">
        </div>

        <div class="row g-4">

            <!-- TARJETA 1: GESTIÓN DE MATRÍCULAS -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" class="card-img-top" style="height:200px; object-fit:cover;" alt="Matrículas">
                        <span class="badge bg-primary position-absolute top-0 start-0 m-3 shadow-sm">Administración</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Matrículas Académicas</h5>
                        <p class="card-text text-muted small flex-grow-1">Gestiona las inscripciones de los estudiantes a los diferentes módulos de formación y valida sus requisitos.</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>📅 <strong>Fechas:</strong> Registro automatizado</li>
                            <li>📋 <strong>Estado:</strong> Activo / Inactivo</li>
                        </ul>
                        <a href="{{ route('enrollments.index') }}" class="btn btn-outline-primary w-100 fw-bold">Administrar Matrículas</a>
                    </div>
                </div>
            </div>

            <!-- TARJETA 2: CALIFICACIONES Y NOTAS -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1501504905252-473c47e087f8" class="card-img-top" style="height:200px; object-fit:cover;" alt="Calificaciones">
                        <span class="badge bg-primary position-absolute top-0 start-0 m-3 shadow-sm">Evaluación</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Control de Calificaciones</h5>
                        <p class="card-text text-muted small flex-grow-1">Registra las notas de las evaluaciones académicas ligadas a cada materia y estudiante de forma individual.</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>📊 <strong>Detalle:</strong> Nota y Tipo de Evaluación</li>
                            <li>✏️ <strong>Acciones:</strong> Edición y Eliminación</li>
                        </ul>
                        <a href="{{ route('grades.index') }}" class="btn btn-outline-primary w-100 fw-bold">Administrar Notas</a>
                    </div>
                </div>
            </div>

            <!-- TARJETA 3: ESTUDIANTES -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" class="card-img-top" style="height:200px; object-fit:cover;" alt="Estudiantes">
                        <span class="badge bg-primary position-absolute top-0 start-0 m-3 shadow-sm">Usuarios</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Registro de Estudiantes</h5>
                        <p class="card-text text-muted small flex-grow-1">Consulta la base de datos de estudiantes registrados con sus datos personales e historial de matrícula.</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>👤 <strong>Datos:</strong> Nombre completo e ID</li>
                            <li>🎓 <strong>Estado:</strong> Vinculado a sistema</li>
                        </ul>
                        <a href="{{ route('enrollments.create') }}" class="btn btn-outline-primary w-100 fw-bold">Matricular Estudiante</a>
                    </div>
                </div>
            </div>

            <!-- TARJETA 4: MÓDULOS DE FORMACIÓN -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173" class="card-img-top" style="height:200px; object-fit:cover;" alt="Módulos">
                        <span class="badge bg-primary position-absolute top-0 start-0 m-3 shadow-sm">Plan de Estudios</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Módulos Académicos</h5>
                        <p class="card-text text-muted small flex-grow-1">Organiza los módulos que componen el plan de estudios del programa educativo de Esymatric.</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>📚 <strong>Estructura:</strong> Asignaturas y Créditos</li>
                            <li>🔗 <strong>Relación:</strong> Requisitos asociados</li>
                        </ul>
                        <a href="{{ route('enrollments.index') }}" class="btn btn-outline-primary w-100 fw-bold">Ver Módulos</a>
                    </div>
                </div>
            </div>

            <!-- TARJETA 5: MATERIAS Y ASIGNATURAS -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7" class="card-img-top" style="height:200px; object-fit:cover;" alt="Materias">
                        <span class="badge bg-primary position-absolute top-0 start-0 m-3 shadow-sm">Asignaturas</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Gestión de Materias</h5>
                        <p class="card-text text-muted small flex-grow-1">Consulta y gestiona las materias que cursan los estudiantes en sus módulos matriculados.</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>📝 <strong>Evaluación:</strong> Registro de actividades</li>
                            <li>📌 <strong>Asignación:</strong> Por módulo académico</li>
                        </ul>
                        <a href="{{ route('grades.index') }}" class="btn btn-outline-primary w-100 fw-bold">Ver Materias</a>
                    </div>
                </div>
            </div>

            <!-- TARJETA 6: REQUISITOS DE MATRÍCULA -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1450133064473-71024230f91b" class="card-img-top" style="height:200px; object-fit:cover;" alt="Requisitos">
                        <span class="badge bg-primary position-absolute top-0 start-0 m-3 shadow-sm">Documentación</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Requisitos de Inscripción</h5>
                        <p class="card-text text-muted small flex-grow-1">Verifica los documentos y condiciones necesarias para hacer efectiva la matrícula del alumno.</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>📄 <strong>Estado:</strong> Cumplido / Pendiente</li>
                            <li>✅ <strong>Validación:</strong> Control administrativo</li>
                        </ul>
                        <a href="{{ route('enrollments.index') }}" class="btn btn-outline-primary w-100 fw-bold">Ver Requisitos</a>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection