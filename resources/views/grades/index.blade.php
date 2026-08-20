@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-dark">Lista de Calificaciones</h1>

            <a href="{{ route('grades.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nueva Calificación
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header text-white encabezado-tabla" style="background-color: #2b50aa;">
                <h5 class="mb-0">Calificaciones Registradas</h5>
            </div>

            <div class="card-body">

                <table id="idGrade" class="table table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Nota</th>
                            <th>Tipo Evaluación</th>
                            <th>Fecha Registro</th>
                            <th>Materia</th>
                            <th>Estudiante</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($grades as $grade)

                            <tr>

                                <td>{{ $grade->id }}</td>

                                <td class="fw-semibold">
                                    {{ $grade->grade }}
                                </td>

                                <td>{{ $grade->evaluation_type }}</td>

                                <td>{{ $grade->registration_date }}</td>

                                <td>
                                    {{ $grade->subject->name_subject ?? 'Materia ID: ' . $grade->subject_id }}
                                </td>

                                <td>
                                    {{ $grade->student->userSystem->first_name ?? 'Estudiante ID: ' . $grade->student_id }} {{ $grade->student->userSystem->last_name ?? '' }}
                                </td>

                                <td class="text-center">

                                    <a href="{{ route('grades.show', $grade->id) }}" class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>

                                    <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('grades.destroy', $grade->id) }}" method="POST" class="d-inline">
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