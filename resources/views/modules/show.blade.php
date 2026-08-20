@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">

    <div class="card shadow-lg border-0">

        <div class="card-header text-white" style="background-color: #2b50aa;>
            <h3 class="mb-0">
                Módulo: {{ $modules['name_module'] }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control bg-light">
                        {{ $modules['id'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Nombre del Módulo</label>
                    <div class="form-control">
                        {{ $modules['name_module'] }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-12 mb-3">
                    <label class="fw-bold">Descripción</label>
                    <div class="form-control" style="min-height: 80px;">
                        {{ $modules['description_module'] }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4 mb-3">
                    <label class="fw-bold">Horario</label>
                    <div class="form-control">
                        {{ $modules['schedule'] }}
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="fw-bold">Duración</label>
                    <div class="form-control">
                        {{ $modules['duration'] }}
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="fw-bold">ID Profesor</label>
                    <div class="form-control">
                        {{ $modules['teacher_id'] }}
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Fecha de registro</label>
                    <div class="form-control text-muted bg-light">
                        {{ \Carbon\Carbon::parse($modules['created_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control text-muted bg-light">
                        {{ \Carbon\Carbon::parse($modules['updated_at'])->format('d/m/Y H:i') }}
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