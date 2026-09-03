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
            <h1 class="fw-bold text-dark"> Lista de requisitos</h1>

            <a href="{{ route('requirements.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nuevo requisito
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header text-white encabezado-tabla" style="background-color: #195f95;">
                <h5 class="mb-0">Requisitos registrados</h5>
            </div>

            <div class="card-body">

                <table id="idConcecionario" class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Foto Identificación</th>
                            <th>Foto Id. Padres</th>
                            <th>Foto Documento</th>
                            <th>Foto Salud</th>
                            <th>Carné Vacunas</th>
                            <th>Puntaje Sisbén</th>
                            <th>Registro Civil</th>
                            <th>Reg. Desarrollo</th>
                            <th>Cert. Conducta</th>
                            <th>Cert. Estudios</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($requirements as $requirement)
                            <tr>
                                <td>{{ $requirement->id }}</td>
                                <td class="fw-semibold">{{ $requirement->identification_photo }}</td>
                                <td>{{ $requirement->parent_identification_photo }}</td>
                                <td>{{ $requirement->document_photo }}</td>
                                <td>{{ $requirement->health_photo }}</td>
                                <td>{{ $requirement->vaccine_copy }}</td>
                                <td>{{ $requirement->sisben_score }}</td>
                                <td>{{ $requirement->birth_certificate }}</td>
                                <td>{{ $requirement->development_record }}</td>
                                <td>{{ $requirement->behavior_certificate }}</td>
                                <td>{{ $requirement->previous_study_certificate }}</td>

                                <td class="text-center">
                                    <a href="{{ route('requirements.show', $requirement->id) }}" class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>

                                    <a href="{{ route('requirements.edit', $requirement->id) }}" class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('requirements.destroy', $requirement->id) }}" method="POST" class="d-inline">
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