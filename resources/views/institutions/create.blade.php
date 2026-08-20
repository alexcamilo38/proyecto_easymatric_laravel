@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header  text-white" style="background-color: #2b50aa;">
                    <h4 class="mb-0">Registrar Institución</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('institutions.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Nombre
                            </label>
                            <input
                                type="text"
                                name="name_institution"
                                class="form-control"
                                placeholder="Ingrese el nombre de la institución">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Email
                            </label>
                            <input
                                type="email"
                                name="email_institution"
                                class="form-control"
                                placeholder="Ingrese el correo de la institución">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Teléfono
                            </label>
                            <input
                                type="tel"
                                name="phone_institution"
                                class="form-control"
                                placeholder="Ingrese el número de teléfono">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Dirección
                            </label>
                            <input
                                type="text"
                                name="address_institution"
                                class="form-control"
                                placeholder="Ingrese la dirección de la institución">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Descripción
                            </label>
                            <input
                                type="text"
                                name="description_institution"
                                class="form-control"
                                placeholder="Ingrese una descripción">
                        </div>
                          
                        <button type="submit" class="btn btn-success">
                            Enviar Formulario
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection