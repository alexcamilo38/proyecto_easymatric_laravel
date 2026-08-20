@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow border-0 rounded-4">
                    <div class="card-header  text-white" style="background-color: #2b50aa;">
                        <h4 class="mb-0">Registrar Matrícula</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('enrollments.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Fecha de Matrícula
                                </label>
                                <input type="date" name="enrollment_date" class="form-control"
                                    placeholder="Ingrese la fecha de matrícula">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Estado
                                </label>
                                <select name="status" class="form-select">
                                    <option value="" disabled selected>Seleccione el estado</option>
                                    <option value="Aprobado">Aprobado</option>
                                    <option value="Rechazado">Rechazado</option>
                                    <option value="Pendiente">Pendiente</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="student_id" class="form-label fw-bold">
                                    Estudiante
                                </label>

                                <select name="student_id" id="student_id" class="form-select">
                                    <option value="">Seleccione un estudiante</option>

                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}">
                                            {{ $student->userSystem->first_name ?? 'Estudiante ID: ' . $student->id }}
                                            {{ $student->userSystem->last_name ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="module_id" class="form-label fw-bold">
                                    Módulo
                                </label>

                                <select name="module_id" id="module_id" class="form-select">
                                    <option value="">Seleccione un módulo</option>

                                    @foreach ($modules as $module)
                                        <option value="{{ $module->id }}">
                                            {{ $module->name_module }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="requirement_id" class="form-label fw-bold">
                                    Requisito
                                </label>

                                <select name="requirement_id" id="requirement_id" class="form-select">
                                    <option value="">Seleccione un requisito</option>

                                    @foreach ($requirements as $requirement)
                                        <option value="{{ $requirement->id }}">
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
                                    Guardar Matrícula
                                </button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
