@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-dark"> Lista de usuarios del sistema</h1>

            <a href="{{ route('user_systems.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nuevo usuario
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header text-white encabezado-tabla" style="background-color: #195f95;">
                <h5 class="mb-0">Usuarios registrados</h5>
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
                            <th>Rol</th>
                            <th class="text-center">Acciones</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($userSystems as $userSystem)
                            <tr>

                                <td>{{ $userSystem->id }}</td>

                                <td class="fw-semibold">
                                    {{ $userSystem->first_name }}
                                </td>
                                <td> {{ $userSystem->middle_name }} </td>
                                <td> {{ $userSystem->last_name }} </td>
                                <td> {{ $userSystem->second_last_name }} </td>
                                <td> {{ $userSystem->document }} </td>
                                <td> {{ $userSystem->phone }} </td>
                                <td> {{ $userSystem->email }} </td>
                                <td> {{ $userSystem->rol_id }} </td>

                                <td class="text-center">

                                    <a href="{{ route('user_systems.show', $userSystem->id) }}" class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>

                                    <a href="{{ route('user_systems.edit', $userSystem->id) }}" class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('user_systems.destroy', $userSystem->id) }}" method="POST" class="d-inline">

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