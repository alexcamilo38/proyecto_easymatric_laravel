@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">

    <div class="card shadow-lg border-0">

        <div class="card-header  text-white"  style="background-color: #2b50aa;>
            <h3 class="mb-0">
                Calificación: {{ $grades['grade'] ?? $grades->grade }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control bg-light">
                        {{ $grades['id'] ?? $grades->id }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Nota</label>
                    <div class="form-control">
                        {{ $grades['grade'] ?? $grades->grade }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Tipo de Evaluación</label>
                    <div class="form-control">
                        {{ $grades['evaluation_type'] ?? $grades->evaluation_type }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Fecha de Registro</label>
                    <div class="form-control">
                        {{ $grades['registration_date'] ?? $grades->registration_date }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID de Materia</label>
                    <div class="form-control">
                        {{ $grades['subject_id'] ?? $grades->subject_id }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID de Estudiante</label>
                    <div class="form-control">
                        {{ $grades['student_id'] ?? $grades->student_id }}
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control text-muted bg-light">
                        {{ \Carbon\Carbon::parse($grades['created_at'] ?? $grades->created_at)->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control text-muted bg-light">
                        {{ \Carbon\Carbon::parse($grades['updated_at'] ?? $grades->updated_at)->format('d/m/Y H:i') }}
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