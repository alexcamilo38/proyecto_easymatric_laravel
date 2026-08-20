@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">

        <div class="card shadow-lg border-0 rounded-5">

            <div class="card-header text-white" style="background-color: #0e8b9b;">
                <h3 class="mb-0">Actualizar Institución</h3>
            </div>

            <div class="card-body">

                <form action="{{ route('institutions.update', $institutions) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name_institution" class="form-label fw-bold">
                            Nombre de la institución
                        </label>

                        <input type="text" class="form-control" id="name_institution" name="name_institution"
                            value="{{ old('name_institution', $institutions->name_institution) }}" placeholder="Ingrese el nombre de la institución">
                    </div>

                    <div class="mb-3">
                        <label for="email_institution" class="form-label fw-bold">
                            Email
                        </label>

                        <input type="email" class="form-control" id="email_institution" name="email_institution"
                            value="{{ old('email_institution', $institutions->email_institution) }}" placeholder="Ingrese el correo electrónico">
                    </div>

                    <div class="mb-3">
                        <label for="phone_institution" class="form-label fw-bold">
                            Teléfono
                        </label>

                        <input type="tel" class="form-control" id="phone_institution" name="phone_institution"
                            value="{{ old('phone_institution', $institutions->phone_institution) }}" placeholder="Ingrese el número de teléfono">
                    </div>

                    <div class="mb-3">
                        <label for="address_institution" class="form-label fw-bold">
                            Dirección
                        </label>

                        <input type="text" class="form-control" id="address_institution" name="address_institution"
                            value="{{ old('address_institution', $institutions->address_institution) }}" placeholder="Ingrese la dirección">
                    </div>

                    <div class="mb-3">
                        <label for="description_institution" class="form-label fw-bold">
                            Descripción
                        </label>

                        <input type="text" class="form-control" id="description_institution" name="description_institution"
                            value="{{ old('description_institution', $institutions->description_institution) }}" placeholder="Ingrese la descripción">
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">
                            Volver
                        </a>

                        <button type="submit" class="btn text-white" style="background-color: #143084;">
                            Actualizar Institución
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection