@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header text-white" style="background-color: #2b50aa;">
                    <h4 class="mb-0">Registrar Requisito</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('requirements.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Foto de Identificación
                            </label>
                            <input
                                type="text"
                                name="identification_photo"
                                class="form-control"
                                placeholder="Ingrese el valor o ruta de la foto de identificación">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Foto Identificación de los Padres
                            </label>
                            <input
                                type="text"
                                name="parent_identification_photo"
                                class="form-control"
                                placeholder="Ingrese el valor o ruta de la foto del padre">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Foto del Documento
                            </label>
                            <input
                                type="text"
                                name="document_photo"
                                class="form-control"
                                placeholder="Ingrese la foto del documento">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Foto del Registro de Salud
                            </label>
                            <input
                                type="text"
                                name="health_photo"
                                class="form-control"
                                placeholder="Ingrese el registro de salud">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Copia de Carné de Vacunas
                            </label>
                            <input
                                type="text"
                                name="vaccine_copy"
                                class="form-control"
                                placeholder="Ingrese la copia del carné de vacunas">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Puntaje Sisbén
                            </label>
                            <input
                                type="text"
                                name="sisben_score"
                                class="form-control"
                                placeholder="Ingrese el puntaje del Sisbén">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Registro Civil / Certificado de Nacimiento
                            </label>
                            <input
                                type="text"
                                name="birth_certificate"
                                class="form-control"
                                placeholder="Ingrese el certificado de nacimiento">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Registro de Desarrollo
                            </label>
                            <input
                                type="text"
                                name="development_record"
                                class="form-control"
                                placeholder="Ingrese el registro de desarrollo">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Certificado de Conducta
                            </label>
                            <input
                                type="text"
                                name="behavior_certificate"
                                class="form-control"
                                placeholder="Ingrese el certificado de conducta">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Certificado de Estudios Anteriores
                            </label>
                            <input
                                type="text"
                                name="previous_study_certificate"
                                class="form-control"
                                placeholder="Ingrese el certificado de estudios anteriores">
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