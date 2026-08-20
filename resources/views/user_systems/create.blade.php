@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow border-0 rounded-4">
                    <div class="card-header text-white" style="background-color: #2b50aa;">
                        <h4 class="mb-0">Registrar usuario del sistema</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('user_systems.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Primer Nombre
                                </label>
                                <input type="text" name="first_name" class="form-control"
                                    placeholder="Ingrese el primer nombre">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Segundo Nombre
                                </label>
                                <input type="text" name="middle_name" class="form-control"
                                    placeholder="Ingrese el segundo nombre">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Primer Apellido
                                </label>
                                <input type="text" name="last_name" class="form-control"
                                    placeholder="Ingrese el primer apellido">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Segundo Apellido
                                </label>
                                <input type="text" name="second_last_name" class="form-control"
                                    placeholder="Ingrese el segundo apellido">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Documento
                                </label>
                                <input type="text" name="document" class="form-control"
                                    placeholder="Ingrese el número de documento">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Teléfono
                                </label>
                                <input type="text" name="phone" class="form-control"
                                    placeholder="Ingrese el número de teléfono">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Correo Electrónico
                                </label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Ingrese el correo electrónico">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Contraseña
                                </label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Ingrese la contraseña">
                            </div>

                            <div class="mb-3">
                                <label for="rol_id" class="form-label fw-bold">
                                    Rol
                                </label>

                                <select name="rol_id" id="rol_id" class="form-select">
                                    <option value="">Seleccione un rol</option>

                                    @foreach ($rols as $rol)
                                        <option value="{{ $rol->id }}">
                                            {{ $rol->name_role }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                    Cancelar
                                </a>

                                <button type="submit" class="btn btn-success">
                                    Guardar usuario
                                </button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection