<?php

use App\Http\Controllers\API\WilayahController;
use App\Http\Controllers\API\Administration\UserController;
use App\Http\Controllers\API\Admission\PatientController;
use App\Http\Controllers\API\Admission\DoctorController;
use App\Http\Controllers\API\Admission\PersonScheduleController;
use App\Http\Controllers\API\Admission\MedicalExaminationController;
use App\Http\Controllers\API\Admission\MedicalRecordController;
use App\Http\Controllers\API\Management\TariffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/wilayah', [WilayahController::class, 'index'])->name('wilayah.index');




/* User related routes */
Route::get('/administration/user', [UserController::class, 'index'])->name('user.index');
Route::get('/administration/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/administration/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/administrationuser', [UserController::class, 'store'])->name('user.store');
Route::get('/administration/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/administration/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/administration/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

/* Patient related routes */
Route::get('/admission/patient', [PatientController::class, 'index'])->name('patient.index');
Route::get('/admission/patient/{id}', [PatientController::class, 'show'])->name('patient.show');
Route::get('/admission/patient/create', [PatientController::class, 'create'])->name('patient.create');
Route::post('/admission/patient', [PatientController::class, 'store'])->name('patient.store');
Route::get('/admission/patient/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
Route::post('/admission/patient/{id}', [PatientController::class, 'update'])->name('patient.update');
Route::delete('/admission/patient/{id}', [PatientController::class, 'destroy'])->name('patient.destroy');

/* Doctor related routes */
Route::get('/admission/doctor', [DoctorController::class, 'index'])->name('doctor.index');
Route::get('/admission/doctor/{id}', [DoctorController::class, 'show'])->name('doctor.show');
Route::get('/admission/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
Route::post('/admission/doctor', [DoctorController::class, 'store'])->name('doctor.store');
Route::get('/admission/doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::post('/admission/doctor/{id}', [DoctorController::class, 'update'])->name('doctor.update');
Route::delete('/admission/doctor/{id}', [DoctorController::class, 'destroy'])->name('doctor.destroy');

/* Doctor Schedule related routes */
Route::get('/admission/schedule', [PersonScheduleController::class, 'index'])->name('doctorSchedule.index');
Route::get('/admission/schedule/{id}', [PersonScheduleController::class, 'show'])->name('doctorSchedule.show');
Route::get('/admission/schedule/create', [PersonScheduleController::class, 'create'])->name('doctorSchedule.create');
Route::post('/admission/schedule', [PersonScheduleController::class, 'store'])->name('doctorSchedule.store');
Route::get('/admission/schedule/edit/{id}', [PersonScheduleController::class, 'edit'])->name('doctorSchedule.edit');
Route::post('/admission/schedule/{id}', [PersonScheduleController::class, 'update'])->name('doctorSchedule.update');
Route::delete('/admission/schedule/{id}', [PersonScheduleController::class, 'destroy'])->name('doctorSchedule.destroy');

/* Medical Admission related routes */
Route::get('/admission/registration', [MedicalAdmissionController::class, 'index'])->name('ma.index');
Route::get('/admission/registration/{id}', [MedicalAdmissionController::class, 'show'])->name('ma.show');
Route::get('/admission/registration/create', [MedicalAdmissionController::class, 'create'])->name('ma.create');
Route::post('/admission/registration', [MedicalAdmissionController::class, 'store'])->name('ma.store');
Route::get('/admission/registration/edit/{id}', [MedicalAdmissionController::class, 'edit'])->name('ma.edit');
Route::post('/admission/registration/{id}', [MedicalAdmissionController::class, 'update'])->name('ma.update');
Route::delete('/admission/registration/{id}', [MedicalAdmissionController::class, 'destroy'])->name('ma.destroy');

/* Medical Examination related routes */
Route::get('/admission/examination', [MedicalExaminationController::class, 'index'])->name('me.index');
Route::get('/admission/examination/{id}', [MedicalExaminationController::class, 'show'])->name('me.show');
Route::get('/admission/examination/create', [MedicalExaminationController::class, 'create'])->name('me.create');
Route::post('/admission/examination', [MedicalExaminationController::class, 'store'])->name('me.store');
Route::get('/admission/examination/edit/{id}', [MedicalExaminationController::class, 'edit'])->name('me.edit');
Route::post('/admission/examination/{id}', [MedicalExaminationController::class, 'update'])->name('me.update');
Route::delete('/admission/examination/{id}', [MedicalExaminationController::class, 'destroy'])->name('me.destroy');

/* Medical Record related routes */
Route::get('/admission/medicalrecord', [MedicalRecordController::class, 'index'])->name('mr.index');
Route::get('/admission/medicalrecord/{id}', [MedicalRecordController::class, 'show'])->name('mr.show');
Route::get('/admission/medicalrecord/user/{id}', [MedicalRecordController::class, 'showByUser'])->name('mr.user.show');

/* Tariff related routes */
Route::get('/management/tariff', [TariffController::class, 'index'])->name('tariff.index');
Route::get('/management/tariff/{id}', [TariffController::class, 'show'])->name('tariff.show');
Route::get('/management/tariff/create', [TariffController::class, 'create'])->name('tariff.create');
Route::post('/management/tariff', [TariffController::class, 'store'])->name('tariff.store');
Route::get('/management/tariff/edit/{id}', [TariffController::class, 'edit'])->name('tariff.edit');
Route::post('/management/tariff/{id}', [TariffController::class, 'update'])->name('tariff.update');
Route::delete('/management/tariff/{id}', [TariffController::class, 'destroy'])->name('tariff.destroy');
