@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">

        <div class="card shadow-lg border-0 rounded-5">

            <div class="card-header text-white" style="background-color: #0e8b9b;">
                <h3 class="mb-0">Actualizar Acudiente</h3>
            </div>

            <div class="card-body">

                <form action="{{ route('guardians.update', $guardians) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="first_name" class="form-label fw-bold">
                            Primer Nombre
                        </label>

                        <input type="text" class="form-control" id="first_name" name="first_name"
                            value="{{ old('first_name', $guardians->first_name) }}" placeholder="Ingrese el primer nombre">
                    </div>

                    <div class="mb-3">
                        <label for="middle_name" class="form-label fw-bold">
                            Segundo Nombre
                        </label>

                        <input type="text" class="form-control" id="middle_name" name="middle_name"
                            value="{{ old('middle_name', $guardians->middle_name) }}" placeholder="Ingrese el segundo nombre">
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label fw-bold">
                            Primer Apellido
                        </label>

                        <input type="text" class="form-control" id="last_name" name="last_name"
                            value="{{ old('last_name', $guardians->last_name) }}" placeholder="Ingrese el primer apellido">
                    </div>

                    <div class="mb-3">
                        <label for="second_last_name" class="form-label fw-bold">
                            Segundo Apellido
                        </label>

                        <input type="text" class="form-control" id="second_last_name" name="second_last_name"
                            value="{{ old('second_last_name', $guardians->second_last_name) }}" placeholder="Ingrese el segundo apellido">
                    </div>

                    <div class="mb-3">
                        <label for="document" class="form-label fw-bold">
                            Documento
                        </label>

                        <input type="text" class="form-control" id="document" name="document"
                            value="{{ old('document', $guardians->document) }}" placeholder="Ingrese el número de documento">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label fw-bold">
                            Teléfono
                        </label>

                        <input type="tel" class="form-control" id="phone" name="phone"
                            value="{{ old('phone', $guardians->phone) }}" placeholder="Ingrese el número de teléfono">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">
                            Email
                        </label>

                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email', $guardians->email) }}" placeholder="Ingrese el correo electrónico">
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">
                            Volver
                        </a>

                        <button type="submit" class="btn text-white" style="background-color: #143084;">
                            Actualizar Acudiente
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection