@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-dark"> Lista de acudientes</h1>

            <a href="{{ route('guardians.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nuevo acudiente
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header text-white encabezado-tabla" style="background-color: #195f95;">
                <h5 class="mb-0">Acudientes registrados</h5>
            </div>

            <div class="card-body">

                <table id="idConcecionario" class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Primer Nombre</th>
                            <th>Segundo Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Documento</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th class="text-center">Acciones</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($guardians as $guardian)
                            <tr>

                                <td>{{ $guardian->id }}</td>

                                <td class="fw-semibold">
                                    {{ $guardian->first_name }}
                                </td>
                                <td> {{ $guardian->middle_name }} </td>
                                <td> {{ $guardian->last_name }} </td>
                                <td> {{ $guardian->second_last_name }} </td>
                                <td> {{ $guardian->document }} </td>
                                <td> {{ $guardian->phone }} </td>
                                <td> {{ $guardian->email }} </td>

                                <td class="text-center">

                                    <a href="{{ route('guardians.show', $guardian->id) }}" class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>

                                    <a href="{{ route('guardians.edit', $guardian->id) }}" class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('guardians.destroy', $guardian->id) }}" method="POST" class="d-inline">

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