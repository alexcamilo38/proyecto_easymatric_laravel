@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-dark"> Lista de instituciones</h1>

            <a href="{{ route('institutions.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nueva institución
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header text-white encabezado-tabla" style="background-color: #195f95;">
                <h5 class="mb-0">Instituciones registradas</h5>
            </div>

            <div class="card-body">

                <table id="idConcecionario" class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Descripción</th>
                            <th class="text-center">Acciones</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($institutions as $institution)
                            <tr>

                                <td>{{ $institution->id }}</td>

                                <td class="fw-semibold">
                                    {{ $institution->name_institution }}
                                </td>
                                <td> {{ $institution->email_institution }} </td>
                                <td> {{ $institution->phone_institution }} </td>
                                <td> {{ $institution->address_institution }} </td>
                                <td> {{ $institution->description_institution }} </td>

                                <td class="text-center">

                                    <a href="{{ route('institutions.show', $institution->id) }}" class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>

                                    <a href="{{ route('institutions.edit', $institution->id) }}" class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('institutions.destroy', $institution->id) }}" method="POST" class="d-inline">

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