@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">

    <div class="card shadow-lg border-0">

        <div class="card-header  text-white"  style="background-color: #2b50aa;>
            <h3 class="mb-0">
                Asignatura: {{ $subjects->name_subject }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control bg-light">
                        {{ $subjects->id }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Nombre de la Asignatura</label>
                    <div class="form-control">
                        {{ $subjects->name_subject }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Descripción</label>
                    <div class="form-control">
                        {{ $subjects->description_subject }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Duración</label>
                    <div class="form-control">
                        {{ $subjects->duration }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Módulo</label>
                    <div class="form-control">
                        {{ $subjects->module->name_module ?? 'N/A' }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Profesor</label>
                    <div class="form-control">
                        {{ $subjects->teacher->userSystem->first_name ?? 'N/A' }} {{ $subjects->teacher->userSystem->last_name ?? '' }}
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Fecha de registro</label>
                    <div class="form-control text-muted bg-light">
                        {{ \Carbon\Carbon::parse($subjects->created_at)->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control text-muted bg-light">
                        {{ \Carbon\Carbon::parse($subjects->updated_at)->format('d/m/Y H:i') }}
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