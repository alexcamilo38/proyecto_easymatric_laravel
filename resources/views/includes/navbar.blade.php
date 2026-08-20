<nav class="navbar navbar-expand-lg navbar-dark shadow py-3" style="background-color: #2b50aa;">
    <div class="container-fluid px-4">

        <!-- Logo y Nombre de la Aplicación -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/LogoBlanco.png') }}" alt="EASYMATRIC Logo" height="50" class="me-2">
            <span class="text-white fw-bold">EASYMATRIC</span>
        </a>

        <!-- Botón Toggler para Responsive -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Menú Navegación Principal (Izquierda) -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center gap-2 ms-lg-2">

                <!-- Enlace Quienes Somos (Tamaño original) -->
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="/about">Quienes Somos</a>
                </li>

                <!-- Desplegable de Administración -->
                <li class="nav-item dropdown">
                    <a class="btn btn-light dropdown-toggle text-dark fw-medium px-3 py-2" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Administración
                    </a>

                    <ul class="dropdown-menu shadow-sm border-0 mt-2">
                        <li><a class="dropdown-item" href="{{ route('rols.index') }}">Lista de Roles</a></li>
                        <li><a class="dropdown-item" href="{{ route('institutions.index') }}">Lista de Instituciones</a></li>
                        <li><a class="dropdown-item" href="{{ route('guardians.index') }}">Lista de Acudientes</a></li>
                        <li><a class="dropdown-item" href="{{ route('requirements.index') }}">Lista de Requisitos</a></li>
                        <li><a class="dropdown-item" href="{{ route('user_systems.index') }}">Lista de Usuarios</a></li>
                        <li><a class="dropdown-item" href="{{ route('teachers.index') }}">Lista de Profesores</a></li>
                        <li><a class="dropdown-item" href="{{ route('students.index') }}">Lista de Estudiantes</a></li>
                        <li><a class="dropdown-item" href="{{ route('modules.index') }}">Lista de Módulos</a></li>
                        <li><a class="dropdown-item" href="{{ route('subjects.index') }}">Lista de Materias</a></li>
                        <li><a class="dropdown-item" href="{{ route('enrollments.index') }}">Lista de Matrículas</a></li>
                        <li><a class="dropdown-item" href="{{ route('grades.index') }}">Lista de Calificaciones</a></li>
                    </ul>
                </li>

            </ul>

            <!-- Sección Derecha (Buscador e Iniciar Sesión) -->
            <div class="d-flex align-items-center gap-3">
                
                <!-- Formulario de Búsqueda -->
                <form class="d-flex align-items-center m-0" role="search">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 py-2">
                            🔍
                        </span>
                        <input class="form-control border-start-0 py-2" type="search" placeholder="Buscar..." aria-label="Buscar">

                        <button class="btn btn-light fw-bold border py-2" style="color: #2b50aa;" type="submit">
                            Buscar
                        </button>
                    </div>
                </form>

                <!-- Botón Iniciar Sesión -->
                <a href="/" class="btn btn-outline-light fw-bold px-4 py-2 text-nowrap">
                    Iniciar Sesión
                </a>

            </div>

        </div>

    </div>
</nav>