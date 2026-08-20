@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-dark"> Lista de profesores</h1>

            <a href="{{ route('teachers.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nuevo profesor
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header text-white encabezado-tabla" style="background-color: #195f95;">
                <h5 class="mb-0">Profesores registrados</h5>
            </div>

            <div class="card-body">

                <table id="idConcecionario" class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Usuario del Sistema</th>
                            <th>Institución</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($teachers as $teacher)
                            <tr>

                                <td>{{ $teacher->id }}</td>

                                <td class="fw-semibold">
                                    {{ $teacher->userSystem->first_name ?? 'N/A' }} {{ $teacher->userSystem->last_name ?? '' }}
                                </td>
                                
                                <td>
                                    {{ $teacher->institution->name_institution ?? 'Sin asignación' }}
                                </td>

                                <td class="text-center">

                                    <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>

                                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" class="d-inline">

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