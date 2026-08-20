@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Actualizar Módulo</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('modules.update', $modules) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nombre del Módulo</label>
                            <input type="text" name="name_module" class="form-control" value="{{ old('name_module', $modules->name_module) }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Descripción</label>
                            <textarea name="description_module" class="form-control" rows="3">{{ old('description_module', $modules->description_module) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Horario</label>
                            <input type="text" name="schedule" class="form-control" value="{{ old('schedule', $modules->schedule) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Duración</label>
                            <input type="text" name="duration" class="form-control" value="{{ old('duration', $modules->duration) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Profesor Asignado</label>
                            <select name="teacher_id" class="form-select">
                                <option value="">Seleccione un profesor...</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}"
                                        {{ old('teacher_id', $modules->teacher_id) == $teacher->id ? 'selected' : '' }}>
                                        {{ $teacher->userSystem->first_name ?? 'Profesor ID: ' . $teacher->id }} {{ $teacher->userSystem->last_name ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success">Actualizar Módulo</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection