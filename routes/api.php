<?php

use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserSystemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('rols/list',[RolController::class,'index'])->name('api.v1.rols.index');
Route::post('rols/store',[RolController::class,'salida'])->name('api.v1.rols.store');
Route::get('rols/{id}',[RolController::class,'show'])->name('api.v1.rols.show');
Route::put('rols/{rols}',[RolController::class,'update'])->name('api.v1.rols.update');
Route::delete('rols/{rols}',[RolController::class,'destroy'])->name('api.v1.rols.destroy');

Route::get('institutions/list',[InstitutionController::class,'index'])->name('api.v1.institutions.index');
Route::post('institutions/store',[InstitutionController::class,'salida'])->name('api.v1.institutions.store');
Route::get('institutions/{id}',[InstitutionController::class,'show'])->name('api.v1.institutions.show');
Route::put('institutions/{institutions}',[InstitutionController::class,'update'])->name('api.v1.institutions.update');
Route::delete('institutions/{institutions}',[InstitutionController::class,'destroy'])->name('api.v1.institutions.destroy');

Route::get('guardians/list',[GuardianController::class,'index'])->name('api.v1.guardians.index');
Route::post('guardians/store',[GuardianController::class,'salida'])->name('api.v1.guardians.store');
Route::get('guardians/{id}',[GuardianController::class,'show'])->name('api.v1.guardians.show');
Route::put('guardians/{guardians}',[GuardianController::class,'update'])->name('api.v1.guardians.update');
Route::delete('guardians/{guardians}',[GuardianController::class,'destroy'])->name('api.v1.guardians.destroy');

Route::get('requirements/list',[RequirementController::class,'index'])->name('api.v1.requirements.index');
Route::post('requirements/store',[RequirementController::class,'salida'])->name('api.v1.requirements.store');
Route::get('requirements/{id}',[RequirementController::class,'show'])->name('api.v1.requirements.show');
Route::put('requirements/{requirements}',[RequirementController::class,'update'])->name('api.v1.requirements.update');
Route::delete('requirements/{requirements}',[RequirementController::class,'destroy'])->name('api.v1.requirements.destroy');

Route::get('userSystem/list',[UserSystemController::class,'index'])->name('api.v1.user_systems.index');
Route::post('userSystem/store',[UserSystemController::class,'salida'])->name('api.v1.user_systems.store');
Route::get('userSystem/{id}',[UserSystemController::class,'show'])->name('api.v1.user_systems.show');
Route::put('userSystem/{userSystem}',[UserSystemController::class,'update'])->name('api.v1.user_systems.update');
Route::delete('userSystem/{userSystem}',[UserSystemController::class,'destroy'])->name('api.v1.user_systems.destroy');

Route::get('teachers/list',[TeacherController::class,'index'])->name('api.v1.teachers.index');
Route::post('teachers/store',[TeacherController::class,'salida'])->name('api.v1.teachers.store');
Route::get('teachers/{id}',[TeacherController::class,'show'])->name('api.v1.teachers.show');
Route::put('teachers/{teachers}',[TeacherController::class,'update'])->name('api.v1.teachers.update');
Route::delete('teachers/{teachers}',[TeacherController::class,'destroy'])->name('api.v1.teachers.destroy');

Route::get('students/list',[StudentController::class,'index'])->name('api.v1.students.index');
Route::post('students/store',[StudentController::class,'salida'])->name('api.v1.students.store');
Route::get('students/{id}',[StudentController::class,'show'])->name('api.v1.students.show');
Route::put('students/{students}',[StudentController::class,'update'])->name('api.v1.students.update');
Route::delete('students/{students}',[StudentController::class,'destroy'])->name('api.v1.students.destroy');

Route::get('modules/list',[ModuleController::class,'index'])->name('api.v1.modules.index');
Route::post('modules/store',[ModuleController::class,'salida'])->name('api.v1.modules.store');
Route::get('modules/{id}',[ModuleController::class,'show'])->name('api.v1.modules.show');
Route::put('modules/{modules}',[ModuleController::class,'update'])->name('api.v1.modules.update');
Route::delete('modules/{modules}',[ModuleController::class,'destroy'])->name('api.v1.modules.destroy');

Route::get('subjects/list',[SubjectController::class,'index'])->name('api.v1.subjects.index');
Route::post('subjects/store',[SubjectController::class,'salida'])->name('api.v1.subjects.store');
Route::get('subjects/{id}',[SubjectController::class,'show'])->name('api.v1.subjects.show');
Route::put('subjects/{subjects}',[SubjectController::class,'update'])->name('api.v1.subjects.update');
Route::delete('subjects/{subjects}',[SubjectController::class,'destroy'])->name('api.v1.subjects.destroy');

Route::get('enrollments/list',[EnrollmentController::class,'index'])->name('api.v1.enrollments.index');
Route::post('enrollments/store',[EnrollmentController::class,'salida'])->name('api.v1.enrollments.store');
Route::get('enrollments/{id}',[EnrollmentController::class,'show'])->name('api.v1.enrollments.show');
Route::put('enrollments/{enrollments}',[EnrollmentController::class,'update'])->name('api.v1.enrollments.update');
Route::delete('enrollments/{enrollments}',[EnrollmentController::class,'destroy'])->name('api.v1.enrollments.destroy');

Route::get('grades/list',[GradeController::class,'index'])->name('api.v1.grades.index');
Route::post('grades/store',[GradeController::class,'salida'])->name('api.v1.grades.store');
Route::get('grades/{id}',[GradeController::class,'show'])->name('api.v1.grades.show');
Route::put('grades/{grades}',[GradeController::class,'update'])->name('api.v1.grades.update');
Route::delete('grades/{grades}',[GradeController::class,'destroy'])->name('api.v1.grades.destroy');


