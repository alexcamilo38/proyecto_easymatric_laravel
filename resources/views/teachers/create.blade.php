@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow border-0 rounded-4">
                    <div class="card-header  text-white" style="background-color: #2b50aa;">
                        <h4 class="mb-0">Registrar profesor</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="user_system_id" class="form-label fw-bold">
                                    Usuario del Sistema
                                </label>

                                <select name="user_system_id" id="user_system_id" class="form-select">
                                    <option value="">Seleccione un usuario</option>

                                    @foreach ($userSystems as $userSystem)
                                        <option value="{{ $userSystem->id }}">
                                            {{ $userSystem->first_name }} {{ $userSystem->last_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="institution_id" class="form-label fw-bold">
                                    Institución
                                </label>

                                <select name="institution_id" id="institution_id" class="form-select">
                                    <option value="">Seleccione una institución</option>

                                    @foreach ($institutions as $institution)
                                        <option value="{{ $institution->id }}">
                                            {{ $institution->name_institution }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                    Cancelar
                                </a>

                                <button type="submit" class="btn btn-success">
                                    Guardar profesor
                                </button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection