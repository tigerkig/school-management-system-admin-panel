<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\EnrollmentsController;
use App\Http\Controllers\RemindersController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/students', [StudentController::class, 'index'])->middleware(['auth'])->name('students');
Route::get('person/{id}/profile', [StudentController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::get('person/{id}/medicalProfile', [StudentController::class, 'medicalProfile'])->middleware(['auth'])->name('medicalProfile');
Route::get('/person/{id}', [StudentController::class, 'person'])->middleware(['auth'])->name('person');
Route::post('studentUploadFile', [StudentController::class, 'uploadContent'])->middleware(['auth'])->name('studentUploadFile');
Route::post('studentDetailDownload', [StudentController::class, 'studentDetailDownload'])->middleware(['auth'])->name('studentDetailDownload');
Route::post('studentArchive', [StudentController::class, 'studentArchive'])->middleware(['auth'])->name('studentArchive');
Route::post('studentCopyPaste', [StudentController::class, 'studentCopyPaste'])->middleware(['auth'])->name('studentCopyPaste');
Route::post('studentProfileEdit', [StudentController::class, 'studentProfileEdit'])->middleware(['auth'])->name('studentProfileEdit');

Route::get('/enrollments', [EnrollmentsController::class, 'index'])->middleware(['auth'])->name('enrollments');
Route::get('/enrollments/startApplication', [EnrollmentsController::class, 'startApplication'])->middleware(['auth'])->name('startApplication');
Route::get('/enrollments/resumeApplication', [EnrollmentsController::class, 'resumeApplication'])->middleware(['auth'])->name('resumeApplication');
Route::post('getCountryList', [EnrollmentsController::class, 'getCountryList'])->middleware(['auth'])->name('getCountryList');

//Tiger
Route::post('emergency_contacts',[EnrollmentsController::class, 'emergency_contacts'])->middleware(['auth'])->name('emergency_contacts');
Route::post('add_info',[EnrollmentsController::class, 'add_info'])->middleware(['auth'])->name('add_info');
Route::post('studentDetail',[EnrollmentsController::class, 'studentDetail'])->middleware(['auth'])->name('studentDetail');
Route::post('medicalDetail',[EnrollmentsController::class, 'medicalDetail'])->middleware(['auth'])->name('medicalDetail');
Route::post('learningSupport',[EnrollmentsController::class, 'learningSupport'])->middleware(['auth'])->name('learningSupport');
Route::post('RiskAssessment',[EnrollmentsController::class, 'RiskAssessment'])->middleware(['auth'])->name('RiskAssessment');
Route::post('siblings',[EnrollmentsController::class, 'siblings'])->middleware(['auth'])->name('siblings');
Route::post('permissions',[EnrollmentsController::class, 'permissions'])->middleware(['auth'])->name('permissions');
Route::post('supportingDocForm',[EnrollmentsController::class, 'supportingDocForm'])->middleware(['auth'])->name('supportingDocForm');



Route::get('/reminders', [RemindersController::class, 'index'])->middleware(['auth'])->name('reminders');
Route::get('/reminders/addEvent', [RemindersController::class, 'addEvent'])->middleware(['auth'])->name('addEvent');

Route::get('/classes', [ClassesController::class, 'index'])->middleware(['auth'])->name('classes');
Route::get('/classes/detail', [ClassesController::class, 'detail'])->middleware(['auth'])->name('detail');

Route::get('/teachers', [TeachersController::class, 'index'])->middleware(['auth'])->name('teachers');
Route::get('/teachers/addTeacher', [TeachersController::class, 'addTeacher'])->middleware(['auth'])->name('addTeacher');
Route::post('addTeacher', [TeachersController::class, 'addNewTeacher'])->middleware(['auth'])->name('addNewTeacher');

require __DIR__.'/auth.php';
