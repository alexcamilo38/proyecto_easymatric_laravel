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
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/home');
});

Route::get('rols/create',[RolController::class,'create'])->name('rols.create');
Route::get('rols/list',[RolController::class,'index'])->name('rols.index');
Route::post('rols/store',[RolController::class,'salida'])->name('rols.store');
Route::get('rols/{id}',[RolController::class,'show'])->name('rols.show');
Route::put('rols/{rols}',[RolController::class,'update'])->name('rols.update');
Route::get('rols/{rols}/editar',[RolController::class,'edit'])->name('rols.edit');
Route::delete('rols/{rols}',[RolController::class,'destroy'])->name('rols.destroy');

Route::get('institutions/create',[InstitutionController::class,'create'])->name('institutions.create');
Route::get('institutions/list',[InstitutionController::class,'index'])->name('institutions.index');
Route::post('institutions/store',[InstitutionController::class,'salida'])->name('institutions.store');
Route::get('institutions/{id}',[InstitutionController::class,'show'])->name('institutions.show');
Route::put('institutions/{institutions}',[InstitutionController::class,'update'])->name('institutions.update');
Route::get('institutions/{institutions}/editar',[InstitutionController::class,'edit'])->name('institutions.edit');
Route::delete('institutions/{institutions}',[InstitutionController::class,'destroy'])->name('institutions.destroy');

Route::get('guardians/create',[GuardianController::class,'create'])->name('guardians.create');
Route::get('guardians/list',[GuardianController::class,'index'])->name('guardians.index');
Route::post('guardians/store',[GuardianController::class,'salida'])->name('guardians.store');
Route::get('guardians/{id}',[GuardianController::class,'show'])->name('guardians.show');
Route::put('guardians/{guardians}',[GuardianController::class,'update'])->name('guardians.update');
Route::get('guardians/{guardians}/editar',[GuardianController::class,'edit'])->name('guardians.edit');
Route::delete('guardians/{guardians}',[GuardianController::class,'destroy'])->name('guardians.destroy');

Route::get('requirements/create',[RequirementController::class,'create'])->name('requirements.create');
Route::get('requirements/list',[RequirementController::class,'index'])->name('requirements.index');
Route::post('requirements/store',[RequirementController::class,'salida'])->name('requirements.store');
Route::get('requirements/{id}',[RequirementController::class,'show'])->name('requirements.show');
Route::put('requirements/{requirements}',[RequirementController::class,'update'])->name('requirements.update');
Route::get('requirements/{requirements}/editar',[RequirementController::class,'edit'])->name('requirements.edit');
Route::delete('requirements/{requirements}',[RequirementController::class,'destroy'])->name('requirements.destroy');

Route::get('userSystem/create',[UserSystemController::class,'create'])->name('user_systems.create');
Route::get('userSystem/list',[UserSystemController::class,'index'])->name('user_systems.index');
Route::post('userSystem/store',[UserSystemController::class,'salida'])->name('user_systems.store');
Route::get('userSystem/{id}',[UserSystemController::class,'show'])->name('user_systems.show');
Route::put('userSystem/{userSystem}',[UserSystemController::class,'update'])->name('user_systems.update');
Route::get('userSystem/{userSystem}/editar',[UserSystemController::class,'edit'])->name('user_systems.edit');
Route::delete('userSystem/{userSystem}',[UserSystemController::class,'destroy'])->name('user_systems.destroy');

Route::get('teachers/create',[TeacherController::class,'create'])->name('teachers.create');
Route::get('teachers/list',[TeacherController::class,'index'])->name('teachers.index');
Route::post('teachers/store',[TeacherController::class,'salida'])->name('teachers.store');
Route::get('teachers/{id}',[TeacherController::class,'show'])->name('teachers.show');
Route::put('teachers/{teachers}',[TeacherController::class,'update'])->name('teachers.update');
Route::get('teachers/{teacher}/editar',[TeacherController::class,'edit'])->name('teachers.edit');
Route::delete('teachers/{teachers}',[TeacherController::class,'destroy'])->name('teachers.destroy');

Route::get('students/create',[StudentController::class,'create'])->name('students.create');
Route::get('students/list',[StudentController::class,'index'])->name('students.index');
Route::post('students/store',[StudentController::class,'salida'])->name('students.store');
Route::get('students/{id}',[StudentController::class,'show'])->name('students.show');
Route::put('students/{students}',[StudentController::class,'update'])->name('students.update');
Route::get('students/{student}/editar',[StudentController::class,'edit'])->name('students.edit');
Route::delete('students/{students}',[StudentController::class,'destroy'])->name('students.destroy');

Route::get('modules/create',[ModuleController::class,'create'])->name('modules.create');
Route::get('modules/list',[ModuleController::class,'index'])->name('modules.index');
Route::post('modules/store',[ModuleController::class,'salida'])->name('modules.store');
Route::get('modules/{id}',[ModuleController::class,'show'])->name('modules.show');
Route::put('modules/{modules}',[ModuleController::class,'update'])->name('modules.update');
Route::get('modules/{modules}/editar',[ModuleController::class,'edit'])->name('modules.edit');
Route::delete('modules/{modules}',[ModuleController::class,'destroy'])->name('modules.destroy');

Route::get('subjects/create',[SubjectController::class,'create'])->name('subjects.create');
Route::get('subjects/list',[SubjectController::class,'index'])->name('subjects.index');
Route::post('subjects/store',[SubjectController::class,'salida'])->name('subjects.store');
Route::get('subjects/{id}',[SubjectController::class,'show'])->name('subjects.show');
Route::put('subjects/{subjects}',[SubjectController::class,'update'])->name('subjects.update');
Route::get('subjects/{subjects}/editar',[SubjectController::class,'edit'])->name('subjects.edit');
Route::delete('subjects/{subjects}',[SubjectController::class,'destroy'])->name('subjects.destroy');

Route::get('enrollments/create',[EnrollmentController::class,'create'])->name('enrollments.create');
Route::get('enrollments/list',[EnrollmentController::class,'index'])->name('enrollments.index');
Route::post('enrollments/store',[EnrollmentController::class,'salida'])->name('enrollments.store');
Route::get('enrollments/{id}',[EnrollmentController::class,'show'])->name('enrollments.show');
Route::put('enrollments/{enrollments}',[EnrollmentController::class,'update'])->name('enrollments.update');
Route::get('enrollments/{enrollments}/editar',[EnrollmentController::class,'edit'])->name('enrollments.edit');
Route::delete('enrollments/{enrollments}',[EnrollmentController::class,'destroy'])->name('enrollments.destroy');

Route::get('grades/create',[GradeController::class,'create'])->name('grades.create');
Route::get('grades/list',[GradeController::class,'index'])->name('grades.index');
Route::post('grades/store',[GradeController::class,'salida'])->name('grades.store');
Route::get('grades/{id}',[GradeController::class,'show'])->name('grades.show');
Route::put('grades/{grades}',[GradeController::class,'update'])->name('grades.update');
Route::get('grades/{grades}/editar',[GradeController::class,'edit'])->name('grades.edit');
Route::delete('grades/{grades}',[GradeController::class,'destroy'])->name('grades.destroy');