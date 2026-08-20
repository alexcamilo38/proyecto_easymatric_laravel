@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Actualizar usuario del sistema</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('user_systems.update', $userSystem) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Primer Nombre
                            </label>
                            <input
                                type="text"
                                name="first_name"
                                class="form-control"
                                value="{{ old('first_name', $userSystem->first_name) }}"
                                placeholder="Ingrese el primer nombre">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Segundo Nombre
                            </label>
                            <input
                                type="text"
                                name="middle_name"
                                class="form-control"
                                value="{{ old('middle_name', $userSystem->middle_name) }}"
                                placeholder="Ingrese el segundo nombre">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Primer Apellido
                            </label>
                            <input
                                type="text"
                                name="last_name"
                                class="form-control"
                                value="{{ old('last_name', $userSystem->last_name) }}"
                                placeholder="Ingrese el primer apellido">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Segundo Apellido
                            </label>
                            <input
                                type="text"
                                name="second_last_name"
                                class="form-control"
                                value="{{ old('second_last_name', $userSystem->second_last_name) }}"
                                placeholder="Ingrese el segundo apellido">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Documento
                            </label>
                            <input
                                type="text"
                                name="document"
                                class="form-control"
                                value="{{ old('document', $userSystem->document) }}"
                                placeholder="Ingrese el número de documento">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Teléfono
                            </label>
                            <input
                                type="text"
                                name="phone"
                                class="form-control"
                                value="{{ old('phone', $userSystem->phone) }}"
                                placeholder="Ingrese el número de teléfono">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Correo Electrónico
                            </label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email', $userSystem->email) }}"
                                placeholder="Ingrese el correo electrónico">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Contraseña
                            </label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Ingrese una nueva contraseña (dejar en blanco para conservar la actual)">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Rol
                            </label>

                            <select name="rol_id" class="form-select">
                                <option value="">Seleccione un rol...</option>

                                @foreach($rols as $rol)
                                    <option value="{{ $rol->id }}"
                                        {{ old('rol_id', $userSystem->rol_id) == $rol->id ? 'selected' : '' }}>
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
                                Actualizar usuario
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection