@extends('layouts.app')

@section('content')
<section class="py-5 bg-white">
    <div class="container py-4 text-center">

        <!-- Subtítulo superior -->
        <span class="text-primary fw-bold text-uppercase tracking-wider small">Sobre Nosotros</span>

        <!-- Título principal -->
        <h1 class="display-5 fw-bold text-dark mt-2 mb-3">
            Un equipo comprometido con la educación digital
        </h1>

        <!-- Línea decorativa azul -->
        <div class="mx-auto mb-4" style="width: 50px; height: 3px; background-color: #0d6efd; border-radius: 2px;"></div>

        <!-- Textos descriptivos -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-9 col-xl-8">
                <p class="text-secondary fs-5 mb-3">
                    Somos un equipo conformado por <strong>seis aprendices del SENA</strong>, unidos con el propósito de desarrollar soluciones tecnológicas que mejoren los procesos educativos en las instituciones públicas.
                </p>
                <p class="text-secondary fs-5 mb-0">
                    <strong>EasyMatric</strong> surge como una iniciativa orientada a resolver una necesidad real: la dificultad de gestionar procesos de matrícula de forma ordenada, rápida y transparente. Más que digitalizar formularios, buscamos transformar la relación entre la institución y el estudiante.
                </p>
            </div>
        </div>

        <!-- Tarjetas Misión, Visión y Objetivo -->
        <div class="row g-4 mt-2">

            <!-- Misión (Borde inferior azul) -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden" style="border-bottom: 4px solid #0d6efd !important;">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h4 class="card-title fw-bold text-dark mb-3">Misión</h4>
                        <p class="card-text text-secondary mb-0">
                            Facilitar procesos académicos mediante una plataforma segura que reduzca tiempos y mejore la atención institucional.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Visión (Borde inferior verde) -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden" style="border-bottom: 4px solid #198754 !important;">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h4 class="card-title fw-bold text-dark mb-3">Visión</h4>
                        <p class="card-text text-secondary mb-0">
                            Convertirnos en una referencia tecnológica para la modernización educativa en instituciones públicas y privadas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Objetivo (Borde inferior amarillo/naranja) -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden" style="border-bottom: 4px solid #ffc107 !important;">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h4 class="card-title fw-bold text-dark mb-3">Objetivo</h4>
                        <p class="card-text text-secondary mb-0">
                            Automatizar el proceso de matrícula para disminuir errores y centralizar la información estudiantil.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection