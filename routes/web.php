<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admission\PatientController;
use App\Http\Controllers\Admission\DoctorController;
use App\Http\Controllers\Admission\MedicalRecordController;
use App\Http\Controllers\Admission\DoctorScheduleController;
use App\Http\Controllers\Management\TariffController;
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
    return view('auth.login');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* User related routes */
Route::get('/administration/user', [UserController::class, 'index'])->name('user.index');
Route::get('/administration/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/administration/user.create', [UserController::class, 'create'])->name('user.create');
Route::post('/administration/user', [UserController::class, 'store'])->name('user.store');
Route::get('/administration/user.edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/administration/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/administration/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

/* Patient related routes */
Route::get('/admission/patient', [PatientController::class, 'index'])->name('patient.index');
Route::get('/admission/patient/{id}', [PatientController::class, 'show'])->name('patient.show');
Route::get('/admission/patient.create', [PatientController::class, 'create'])->name('patient.create');
Route::post('/admission/patient', [PatientController::class, 'store'])->name('patient.store');
Route::get('/admission/patient.edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
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

/* Medical Record related routes */
Route::get('/admission/medicalrecord', [MedicalRecordController::class, 'index'])->name('mr.index');
Route::get('/admission/medicalrecord/{id}', [MedicalRecordController::class, 'show'])->name('mr.show');
Route::get('/admission/medicalrecord/patient/{id}', [MedicalRecordController::class, 'showByUser'])->name('mrByPatient.show');

/* Doctor Schedule related routes */
Route::get('/admission/schedule', [DoctorScheduleController::class, 'index'])->name('doctorSchedule.index');
Route::get('/admission/schedule/{id}', [DoctorScheduleController::class, 'show'])->name('doctorSchedule.show');
Route::get('/admission/schedule.create', [DoctorScheduleController::class, 'create'])->name('doctorSchedule.create');
Route::post('/admission/schedule', [DoctorScheduleController::class, 'store'])->name('doctorSchedule.store');
Route::get('/admission/schedule.edit/{id}', [DoctorScheduleController::class, 'edit'])->name('doctorSchedule.edit');
Route::post('/admission/schedule/{id}', [DoctorScheduleController::class, 'update'])->name('doctorSchedule.update');
Route::delete('/admission/schedule/{id}', [DoctorScheduleController::class, 'destroy'])->name('doctorSchedule.destroy');

/* Tariff related routes */
Route::get('/management/tariff', [TariffController::class, 'index'])->name('tariff.index');
Route::get('/management/tariff/{id}', [TariffController::class, 'show'])->name('tariff.show');
Route::get('/management/tariff.create', [TariffController::class, 'create'])->name('tariff.create');
Route::post('/management/tariff', [TariffController::class, 'store'])->name('tariff.store');
Route::get('/management/tariff.edit/{id}', [TariffController::class, 'edit'])->name('tariff.edit');
Route::post('/management/tariff/{id}', [TariffController::class, 'update'])->name('tariff.update');
Route::delete('/management/tariff/{id}', [TariffController::class, 'destroy'])->name('tariff.destroy');

Auth::routes();
