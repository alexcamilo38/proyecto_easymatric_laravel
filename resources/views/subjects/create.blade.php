@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow border-0 rounded-4">
                    <div class="card-header  text-white" style="background-color: #2b50aa;">
                        <h4 class="mb-0">Registrar Asignatura</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('subjects.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Nombre de la asignatura
                                </label>
                                <input type="text" name="name_subject" class="form-control"
                                    placeholder="Ingrese el nombre de la asignatura">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Descripción
                                </label>
                                <textarea name="description_subject" class="form-control" rows="3"
                                    placeholder="Ingrese la descripción"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Duración
                                </label>
                                <input type="text" name="duration" class="form-control"
                                    placeholder="Ingrese la duración">
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
                                <label for="teacher_id" class="form-label fw-bold">
                                    Profesor
                                </label>

                                <select name="teacher_id" id="teacher_id" class="form-select">
                                    <option value="">Seleccione un profesor</option>

                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">
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
                                    Guardar Asignatura
                                </button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection