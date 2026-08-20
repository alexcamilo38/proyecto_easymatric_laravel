@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">

    <div class="card shadow-lg border-0">

        <div class="card-header  text-white" style="background-color: #2b50aa;>
            <h3 class="mb-0">
                Usuario: {{ $userSystem['first_name'] }} {{ $userSystem['last_name'] }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control bg-light">
                        {{ $userSystem['id'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Primer Nombre</label>
                    <div class="form-control">
                        {{ $userSystem['first_name'] }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Segundo Nombre</label>
                    <div class="form-control">
                        {{ $userSystem['middle_name'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Primer Apellido</label>
                    <div class="form-control">
                        {{ $userSystem['last_name'] }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Segundo Apellido</label>
                    <div class="form-control">
                        {{ $userSystem['second_last_name'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Documento</label>
                    <div class="form-control">
                        {{ $userSystem['document'] }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Teléfono</label>
                    <div class="form-control">
                        {{ $userSystem['phone'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Correo Electrónico</label>
                    <div class="form-control">
                        {{ $userSystem['email'] }}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID de Rol</label>
                    <div class="form-control">
                        {{ $userSystem['rol_id'] }}
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Fecha de registro</label>
                    <div class="form-control text-muted bg-light">
                        {{ \Carbon\Carbon::parse($userSystem['created_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control text-muted bg-light">
                        {{ \Carbon\Carbon::parse($userSystem['updated_at'])->format('d/m/Y H:i') }}
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