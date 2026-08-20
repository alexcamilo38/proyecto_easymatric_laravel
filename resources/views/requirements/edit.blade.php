@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">

        <div class="card shadow-lg border-0 rounded-5">

            <div class="card-header text-white" style="background-color: #0e8b9b;">
                <h3 class="mb-0">Actualizar Requisito</h3>
            </div>

            <div class="card-body">

                <form action="{{ route('requirements.update', $requirements) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="identification_photo" class="form-label fw-bold">
                            Foto de Identificación
                        </label>

                        <input type="text" class="form-control" id="identification_photo" name="identification_photo"
                            value="{{ old('identification_photo', $requirements->identification_photo) }}" placeholder="Ingrese la foto de identificación">
                    </div>

                    <div class="mb-3">
                        <label for="parent_identification_photo" class="form-label fw-bold">
                            Foto Identificación de los Padres
                        </label>

                        <input type="text" class="form-control" id="parent_identification_photo" name="parent_identification_photo"
                            value="{{ old('parent_identification_photo', $requirements->parent_identification_photo) }}" placeholder="Ingrese la foto de identificación de los padres">
                    </div>

                    <div class="mb-3">
                        <label for="document_photo" class="form-label fw-bold">
                            Foto del Documento
                        </label>

                        <input type="text" class="form-control" id="document_photo" name="document_photo"
                            value="{{ old('document_photo', $requirements->document_photo) }}" placeholder="Ingrese la foto del documento">
                    </div>

                    <div class="mb-3">
                        <label for="health_photo" class="form-label fw-bold">
                            Foto del Registro de Salud
                        </label>

                        <input type="text" class="form-control" id="health_photo" name="health_photo"
                            value="{{ old('health_photo', $requirements->health_photo) }}" placeholder="Ingrese el registro de salud">
                    </div>

                    <div class="mb-3">
                        <label for="vaccine_copy" class="form-label fw-bold">
                            Copia de Carné de Vacunas
                        </label>

                        <input type="text" class="form-control" id="vaccine_copy" name="vaccine_copy"
                            value="{{ old('vaccine_copy', $requirements->vaccine_copy) }}" placeholder="Ingrese la copia del carné de vacunas">
                    </div>

                    <div class="mb-3">
                        <label for="sisben_score" class="form-label fw-bold">
                            Puntaje Sisbén
                        </label>

                        <input type="text" class="form-control" id="sisben_score" name="sisben_score"
                            value="{{ old('sisben_score', $requirements->sisben_score) }}" placeholder="Ingrese el puntaje del Sisbén">
                    </div>

                    <div class="mb-3">
                        <label for="birth_certificate" class="form-label fw-bold">
                            Registro Civil / Certificado de Nacimiento
                        </label>

                        <input type="text" class="form-control" id="birth_certificate" name="birth_certificate"
                            value="{{ old('birth_certificate', $requirements->birth_certificate) }}" placeholder="Ingrese el certificado de nacimiento">
                    </div>

                    <div class="mb-3">
                        <label for="development_record" class="form-label fw-bold">
                            Registro de Desarrollo
                        </label>

                        <input type="text" class="form-control" id="development_record" name="development_record"
                            value="{{ old('development_record', $requirements->development_record) }}" placeholder="Ingrese el registro de desarrollo">
                    </div>

                    <div class="mb-3">
                        <label for="behavior_certificate" class="form-label fw-bold">
                            Certificado de Conducta
                        </label>

                        <input type="text" class="form-control" id="behavior_certificate" name="behavior_certificate"
                            value="{{ old('behavior_certificate', $requirements->behavior_certificate) }}" placeholder="Ingrese el certificado de conducta">
                    </div>

                    <div class="mb-3">
                        <label for="previous_study_certificate" class="form-label fw-bold">
                            Certificado de Estudios Anteriores
                        </label>

                        <input type="text" class="form-control" id="previous_study_certificate" name="previous_study_certificate"
                            value="{{ old('previous_study_certificate', $requirements->previous_study_certificate) }}" placeholder="Ingrese el certificado de estudios anteriores">
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">
                            Volver
                        </a>

                        <button type="submit" class="btn text-white" style="background-color: #143084;">
                            Actualizar Requisito
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection