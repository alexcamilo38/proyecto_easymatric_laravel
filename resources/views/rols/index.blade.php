@extends('layouts.app')

@section('content')
    <div class="container py-4">

        {{-- NOTIFICACIÓN ESTILIZADA DE ÉXITO --}}
        @if (session('success'))
            <div class="alert alert-dismissible fade show border-0 shadow-lg p-3 mb-4 rounded-4 text-white d-flex align-items-center justify-content-between position-relative overflow-hidden" 
                 id="alertaExito"
                 style="background: linear-gradient(135deg, #195f95 0%, #0d3859 100%); border-left: 6px solid #2ea44f !important;">
                
                {{-- Ícono translúcido de fondo para dar efecto visual --}}
                <div class="position-absolute end-0 bottom-0 opacity-10 pe-3 pb-2 pointer-events-none" style="opacity: 0.15;">
                    <i class="bi bi-check-circle-fill" style="font-size: 7rem; margin-bottom: -1.5rem; margin-right: -1rem;"></i>
                </div>

                {{-- Contenido de la alerta --}}
                <div class="d-flex align-items-center position-relative z-1">
                    <div class="bg-white bg-opacity-20 rounded-circle p-2 d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 48px; height: 48px; min-width: 48px;">
                        <i class="bi bi-check-lg fs-2 text-white"></i>
                    </div>
                    <div>
                        <small class="text-uppercase fw-bold tracking-wider d-block" style="font-size: 0.75rem; letter-spacing: 1px; color: #a3e635;">
                            ¡Proceso Exitoso!
                        </small>
                        <span class="fs-6 fw-semibold">{{ session('success') }}</span>
                    </div>
                </div>

                {{-- Botón de cerrar --}}
                <button type="button" class="btn-close btn-close-white ms-auto position-relative z-1" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            {{-- Script para desaparecer automáticamente --}}
            <script>
                setTimeout(function() {
                    let alerta = document.getElementById('alertaExito');
                    if (alerta) {
                        let bsAlert = new bootstrap.Alert(alerta);
                        bsAlert.close();
                    }
                }, 4000); // 4 segundos
            </script>
        @endif

        {{-- RESTO DE TU VISTA (TÍTULO Y TABLA) --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-dark"> Lista de roles</h1>

            <a href="{{ route('rols.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nuevo roles
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header text-white encabezado-tabla" style="background-color: #195f95;">
                <h5 class="mb-0">Roles registrados</h5>
            </div>

            <div class="card-body">
                <table id="idConcecionario" class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rols as $rol)
                            <tr>
                                <td>{{ $rol->id }}</td>
                                <td class="fw-semibold">{{ $rol->name_role }}</td>
                                <td class="text-center">
                                    <a href="{{ route('rols.show', $rol->id) }}" class="btn btn-info btn-sm me-1">Mostrar</a>
                                    <a href="{{ route('rols.edit', $rol->id) }}" class="btn btn-warning btn-sm me-1">Editar</a>
                                    <form action="{{ route('rols.destroy', $rol->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
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