@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow border-0 rounded-4">
                    <div class="card-header  text-white" style="background-color: #2b50aa;">
                        <h4 class="mb-0">Registrar Calificación</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('grades.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Nota
                                </label>
                                <input type="number" step="0.01" name="grade" class="form-control"
                                    placeholder="Ingrese la calificación">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Tipo de Evaluación
                                </label>
                                <input type="text" name="evaluation_type" class="form-control"
                                    placeholder="Ingrese el tipo de evaluación">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Fecha de Registro
                                </label>
                                <input type="date" name="registration_date" class="form-control"
                                    placeholder="Ingrese la fecha de registro">
                            </div>

                            <div class="mb-3">
                                <label for="subject_id" class="form-label fw-bold">
                                    Materia
                                </label>

                                <select name="subject_id" id="subject_id" class="form-select">
                                    <option value="">Seleccione una materia</option>

                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">
                                            {{ $subject->name_subject ?? $subject->name ?? 'Materia ID: ' . $subject->id }}
                                        </option>
                                    @endforeach
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
                                            {{ $student->userSystem->first_name ?? 'Estudiante ID: ' . $student->id }} {{ $student->userSystem->last_name ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                    Cancelar
                                </a>

                                <button type="submit" class="btn btn-success">
                                    Guardar Calificación
                                </button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection