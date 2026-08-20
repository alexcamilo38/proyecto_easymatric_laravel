@extends('layouts.app')

@section('content')
    <div class="container py-4">

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

                                <td class="fw-semibold">
                                    {{ $requirement->identification_photo }}
                                </td>
                                <td> {{ $requirement->parent_identification_photo }} </td>
                                <td> {{ $requirement->document_photo }} </td>
                                <td> {{ $requirement->health_photo }} </td>
                                <td> {{ $requirement->vaccine_copy }} </td>
                                <td> {{ $requirement->sisben_score }} </td>
                                <td> {{ $requirement->birth_certificate }} </td>
                                <td> {{ $requirement->development_record }} </td>
                                <td> {{ $requirement->behavior_certificate }} </td>
                                <td> {{ $requirement->previous_study_certificate }} </td>

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