@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Actualizar Asignatura</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('subjects.update', $subjects) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Nombre de la asignatura
                            </label>
                            <input
                                type="text"
                                name="name_subject"
                                class="form-control"
                                value="{{ old('name_subject', $subjects->name_subject) }}"
                                placeholder="Ingrese el nombre de la asignatura">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Descripción
                            </label>
                            <textarea
                                name="description_subject"
                                class="form-control"
                                rows="3"
                                placeholder="Ingrese la descripción">{{ old('description_subject', $subjects->description_subject) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Duración
                            </label>
                            <input
                                type="text"
                                name="duration"
                                class="form-control"
                                value="{{ old('duration', $subjects->duration) }}"
                                placeholder="Ingrese la duración">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Módulo
                            </label>

                            <select name="module_id" class="form-select">
                                <option value="">Seleccione un módulo...</option>

                                @foreach($modules as $module)
                                    <option value="{{ $module->id }}"
                                        {{ old('module_id', $subjects->module_id) == $module->id ? 'selected' : '' }}>
                                        {{ $module->name_module }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Profesor
                            </label>

                            <select name="teacher_id" class="form-select">
                                <option value="">Seleccione un profesor...</option>

                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}"
                                        {{ old('teacher_id', $subjects->teacher_id) == $teacher->id ? 'selected' : '' }}>
                                        {{ $teacher->userSystem->first_name ?? 'Profesor ID: ' . $teacher->id }} {{ $teacher->userSystem->last_name ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-success">
                                Actualizar Asignatura
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection