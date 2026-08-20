@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Actualizar Matrícula</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('enrollments.update', $enrollments) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Fecha de Matrícula
                            </label>
                            <input
                                type="date"
                                name="enrollment_date"
                                class="form-control"
                                value="{{ old('enrollment_date', $enrollments->enrollment_date) }}"
                                placeholder="Ingrese la fecha de matrícula">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Estado
                            </label>
                            <input
                                type="text"
                                name="status"
                                class="form-control"
                                value="{{ old('status', $enrollments->status) }}"
                                placeholder="Ingrese el estado">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Estudiante
                            </label>

                            <select name="student_id" class="form-select">
                                <option value="">Seleccione un estudiante...</option>

                                @foreach($students as $student)
                                    <option value="{{ $student->id }}"
                                        {{ old('student_id', $enrollments->student_id) == $student->id ? 'selected' : '' }}>
                                        {{ $student->userSystem->first_name ?? 'Estudiante ID: ' . $student->id }} {{ $student->userSystem->last_name ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Módulo
                            </label>

                            <select name="module_id" class="form-select">
                                <option value="">Seleccione un módulo...</option>

                                @foreach($modules as $module)
                                    <option value="{{ $module->id }}"
                                        {{ old('module_id', $enrollments->module_id) == $module->id ? 'selected' : '' }}>
                                        {{ $module->name_module }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Requisito
                            </label>

                            <select name="requirement_id" class="form-select">
                                <option value="">Seleccione un requisito...</option>

                                @foreach($requirements as $requirement)
                                    <option value="{{ $requirement->id }}"
                                        {{ old('requirement_id', $enrollments->requirement_id) == $requirement->id ? 'selected' : '' }}>
                                        {{ $requirement->name_requirement ?? 'Requisito ID: ' . $requirement->id }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-success">
                                Actualizar Matrícula
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection