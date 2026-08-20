@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-dark">Lista de Módulos</h1>

            <a href="{{ route('modules.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nuevo Módulo
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header text-white encabezado-tabla" style="background-color: #195f95;">
                <h5 class="mb-0">Módulos registrados</h5>
            </div>

            <div class="card-body">

                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Módulo</th>
                            <th>Descripción</th>
                            <th>Horario</th>
                            <th>Duración</th>
                            <th>Profesor</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($modules as $module)
                            <tr>
                                <td>{{ $module->id }}</td>
                                <td class="fw-semibold">{{ $module->name_module }}</td>
                                <td>{{ $module->description_module }}</td>
                                <td>{{ $module->schedule }}</td>
                                <td>{{ $module->duration }}</td>
                                <td>
                                    {{ $module->teacher->userSystem->first_name ?? 'N/A' }} {{ $module->teacher->userSystem->last_name ?? '' }}
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('modules.show', $module->id) }}" class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>

                                    <a href="{{ route('modules.edit', $module->id) }}" class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('modules.destroy', $module->id) }}" method="POST" class="d-inline">
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