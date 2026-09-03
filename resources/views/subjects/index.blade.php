@extends('layouts.app')

@section('content')
    <div class="container py-4">

        {{-- ALERTA DE ÉXITO ESTILIZADA --}}
        @if (session('success'))
            <div class="alert alert-dismissible fade show border-0 shadow-lg p-3 mb-4 rounded-4 text-white d-flex align-items-center justify-content-between position-relative overflow-hidden" 
                 id="alertaExito"
                 style="background: linear-gradient(135deg, #195f95 0%, #0d3859 100%); border-left: 6px solid #2ea44f !important;">
                
                {{-- Ícono translúcido de fondo --}}
                <div class="position-absolute end-0 bottom-0 opacity-15 pe-3 pb-2 pointer-events-none" style="opacity: 0.15;">
                    <i class="bi bi-check-circle-fill" style="font-size: 7rem; margin-bottom: -1.5rem; margin-right: -1rem;"></i>
                </div>

                {{-- Contenido de la alerta --}}
                <div class="d-flex align-items-center position-relative z-1">
                    <div class="bg-white bg-opacity-20 rounded-circle p-2 d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 48px; height: 48px; min-width: 48px;">
                        <i class="bi bi-check-lg fs-2 text-white"></i>
                    </div>
                    <div>
                        <small class="text-uppercase fw-bold d-block" style="font-size: 0.75rem; letter-spacing: 1px; color: #a3e635;">
                            ¡Proceso Exitoso!
                        </small>
                        <span class="fs-6 fw-semibold">{{ session('success') }}</span>
                    </div>
                </div>

                {{-- Botón de cerrar --}}
                <button type="button" class="btn-close btn-close-white ms-auto position-relative z-1" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            {{-- Script para ocultar la alerta tras 4 segundos --}}
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
            <h1 class="fw-bold text-dark">Lista de Asignaturas</h1>

            <a href="{{ route('subjects.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nueva Asignatura
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header text-white encabezado-tabla" style="background-color: #2b50aa;">
                <h5 class="mb-0">Asignaturas Registradas</h5>
            </div>

            <div class="card-body">

                <table id="idSubject" class="table table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Asignatura</th>
                            <th>Descripción</th>
                            <th>Duración</th>
                            <th>Módulo</th>
                            <th>Profesor</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($subjects as $subject)

                            <tr>

                                <td>{{ $subject->id }}</td>

                                <td class="fw-semibold">
                                    {{ $subject->name_subject }}
                                </td>

                                <td>{{ $subject->description_subject }}</td>

                                <td>{{ $subject->duration }}</td>

                                <td>{{ $subject->module->name_module ?? 'Sin asignación' }}</td>
                                
                                <td>
                                    {{ $subject->teacher->userSystem->first_name ?? 'N/A' }} {{ $subject->teacher->userSystem->last_name ?? '' }}
                                </td>

                                <td class="text-center">

                                    <a href="{{ route('subjects.show', $subject->id) }}" class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>

                                    <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" class="d-inline">
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