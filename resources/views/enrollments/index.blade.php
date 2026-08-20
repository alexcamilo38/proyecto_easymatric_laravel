@extends('layouts.app')

@section('content')
    <div class="container py-4">

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
                                    {{ $enrollment->student->userSystem->first_name ?? 'Estudiante ID: ' . $enrollment->student_id }} {{ $enrollment->student->userSystem->last_name ?? '' }}
                                </td>

                                <td>
                                    {{ $enrollment->module->name_module ?? 'Módulo ID: ' . $enrollment->module_id }}
                                </td>

                                <td>
                                    {{ $enrollment->requirement->name_requirement ?? 'Requisito ID: ' . $enrollment->requirement_id }}
                                </td>

                                <td class="text-center">

                                    <a href="{{ route('enrollments.show', $enrollment->id) }}" class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>

                                    <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" class="d-inline">
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