@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header text-white" style="background-color: #2b50aa;">
                    <h4 class="mb-0">Registrar Rol</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('rols.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Nombre del Rol
                            </label>
                            <input
                                type="text"
                                name="name_role"
                                class="form-control"
                                placeholder="Ingrese el nombre del rol">
                        </div>

                        <a href="{{ route('rols.index') }}" class="btn btn-secondary">
                            Cancelar
                        </a>
                        <button type="submit" class="btn text-white" style="background-color: #2b50aa;">
                            Enviar Formulario
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection