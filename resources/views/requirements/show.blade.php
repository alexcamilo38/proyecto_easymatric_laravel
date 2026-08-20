@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">

    <div class="card shadow-lg border-0">

        <div class="card-header  text-white"  style="background-color: #2b50aa;>
            <h3 class="mb-0">
                Requisito #{{ $requirements['id'] }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control bg-light">
                        {{ $requirements['id'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Foto de Identificación</label>
                    <div class="form-control">
                        {{ $requirements['identification_photo'] }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Foto Id. Padres</label>
                    <div class="form-control">
                        {{ $requirements['parent_identification_photo'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Foto Documento</label>
                    <div class="form-control">
                        {{ $requirements['document_photo'] }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Foto Salud</label>
                    <div class="form-control">
                        {{ $requirements['health_photo'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Carné de Vacunas</label>
                    <div class="form-control">
                        {{ $requirements['vaccine_copy'] }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Puntaje Sisbén</label>
                    <div class="form-control">
                        {{ $requirements['sisben_score'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Registro Civil</label>
                    <div class="form-control">
                        {{ $requirements['birth_certificate'] }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Registro Desarrollo</label>
                    <div class="form-control">
                        {{ $requirements['development_record'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Certificado de Conducta</label>
                    <div class="form-control">
                        {{ $requirements['behavior_certificate'] }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Certificado Estudios Anteriores</label>
                    <div class="form-control">
                        {{ $requirements['previous_study_certificate'] }}
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control text-muted">
                        {{ \Carbon\Carbon::parse($requirements['created_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control text-muted">
                        {{ \Carbon\Carbon::parse($requirements['updated_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

            </div>

            <div class="mt-4 text-end">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
            </div>

        </div>

    </div>

</div>
@endsection