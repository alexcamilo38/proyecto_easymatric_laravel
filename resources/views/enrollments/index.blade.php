@extends('layouts.app')

@section('content')
    <div class="container py-4">

        {{-- ALERTA DE ÉXITO ESTILIZADA --}}
        @if (session('success'))
            <div class="alert alert-dismissible fade show border-0 shadow-lg p-3 mb-4 rounded-4 text-white d-flex align-items-center justify-content-between position-relative overflow-hidden"
                id="alertaExito"
                style="background: linear-gradient(135deg, #2b50aa 0%, #1a3478 100%); border-left: 6px solid #2ea44f !important;">

                {{-- Ícono translúcido de fondo --}}
                <div class="position-absolute end-0 bottom-0 opacity-15 pe-3 pb-2 pointer-events-none" style="opacity: 0.15;">
                    <i class="bi bi-check-circle-fill"
                        style="font-size: 7rem; margin-bottom: -1.5rem; margin-right: -1rem;"></i>
                </div>

                {{-- Contenido de la alerta --}}
                <div class="d-flex align-items-center position-relative z-1">
                    <div class="bg-white bg-opacity-20 rounded-circle p-2 d-flex align-items-center justify-content-center me-3 shadow-sm"
                        style="width: 48px; height: 48px; min-width: 48px;">
                        <i class="bi bi-check-lg fs-2 text-white"></i>
                    </div>
                    <div>
                        <small class="text-uppercase fw-bold d-block"
                            style="font-size: 0.75rem; letter-spacing: 1px; color: #a3e635;">
                            ¡Proceso Exitoso!
                        </small>
                        <span class="fs-6 fw-semibold">{{ session('success') }}</span>
                    </div>
                </div>

                {{-- Botón de cerrar --}}
                <button type="button" class="btn-close btn-close-white ms-auto position-relative z-1"
                    data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            {{-- Script para ocultar la alerta solo tras 4 segundos --}}
            <script>
                setTimeout(function() {
                    let alerta = document.getElementById('alertaExito');
                    if (alerta) {
                        let bsAlert = new bootstrap.Alert(alerta);
                        bsAlert.close();
                    }
                }, 4000);
            </script>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-dark">Lista de Matrículas</h1>

            <a href="{{ route('enrollments.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nueva Matrícula
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header text-white encabezado-tabla" style="background-color: #2b50aa;">
                <h5 class="mb-0">Matrículas Registradas</h5>
            </div>

            <div class="card-body">

                <table id="idEnrollment" class="table table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Estudiante</th>
                            <th>Módulo</th>
                            <th>Requisito</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($enrollments as $enrollment)
                            <tr>

                                <td>{{ $enrollment->id }}</td>

                                <td class="fw-semibold">
                                    {{ $enrollment->enrollment_date }}
                                </td>

                                <td>{{ $enrollment->status }}</td>

                                <td>
                                    {{ $enrollment->student->userSystem->first_name ?? 'Estudiante ID: ' . $enrollment->student_id }}
                                    {{ $enrollment->student->userSystem->last_name ?? '' }}
                                </td>

                                <td>
                                    {{ $enrollment->module->name_module ?? 'Módulo ID: ' . $enrollment->module_id }}
                                </td>

                                <td>
                                    {{ $enrollment->requirement->name_requirement ?? 'Requisito ID: ' . $enrollment->requirement_id }}
                                </td>

                                <td class="text-center">

                                    <a href="{{ route('enrollments.show', $enrollment->id) }}"
                                        class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>

                                    <a href="{{ route('enrollments.edit', $enrollment->id) }}"
                                        class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Eliminar
                                        </button>

                                    </form>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>
@endsection
