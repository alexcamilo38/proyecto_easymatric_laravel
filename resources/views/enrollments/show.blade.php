@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">

    <div class="card shadow-lg border-0">

        <div class="card-header  text-white" style="background-color: #2b50aa;>
            <h3 class="mb-0">
                Matrícula: {{ $enrollments->enrollment_date }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control bg-light">
                        {{ $enrollments->id }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Fecha de Matrícula</label>
                    <div class="form-control">
                        {{ $enrollments->enrollment_date }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Estado</label>
                    <div class="form-control">
                        {{ $enrollments->status }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Estudiante</label>
                    <div class="form-control">
                        {{ $enrollments->student->userSystem->first_name ?? 'Estudiante ID: ' . $enrollments->student_id }} {{ $enrollments->student->userSystem->last_name ?? '' }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Módulo</label>
                    <div class="form-control">
                        {{ $enrollments->module->name_module ?? 'Módulo ID: ' . $enrollments->module_id }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Requisito</label>
                    <div class="form-control">
                        {{ $enrollments->requirement->name_requirement ?? 'Requisito ID: ' . $enrollments->requirement_id }}
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Fecha de registro</label>
                    <div class="form-control text-muted bg-light">
                        {{ \Carbon\Carbon::parse($enrollments->created_at)->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control text-muted bg-light">
                        {{ \Carbon\Carbon::parse($enrollments->updated_at)->format('d/m/Y H:i') }}
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