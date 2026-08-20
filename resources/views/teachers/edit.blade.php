@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Actualizar profesor</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('teachers.update', $teacher) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Usuario del Sistema
                            </label>

                            <select name="user_system_id" class="form-select">
                                <option value="">Seleccione un usuario...</option>

                                @foreach($userSystems as $userSystem)
                                    <option value="{{ $userSystem->id }}"
                                        {{ old('user_system_id', $teacher->user_system_id) == $userSystem->id ? 'selected' : '' }}>
                                        {{ $userSystem->first_name }} {{ $userSystem->last_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Institución
                            </label>

                            <select name="institution_id" class="form-select">
                                <option value="">Seleccione una institución...</option>

                                @foreach($institutions as $institution)
                                    <option value="{{ $institution->id }}"
                                        {{ old('institution_id', $teacher->institution_id) == $institution->id ? 'selected' : '' }}>
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
                                Actualizar profesor
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection