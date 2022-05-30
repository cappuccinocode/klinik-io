<?php

use App\Models\MedicalAdmission;
use App\Models\User;
use App\Models\PersonPatient;
use App\Models\PersonEmployee;
use App\Models\Tariff;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// HOME

Breadcrumbs::for('home', function (BreadcrumbTrail $trail): void
{
    $trail->push('Home', route('home'));
});

// USER

Breadcrumbs::for('user.index', function (BreadcrumbTrail $trail): void
{
    $trail->parent('home');
    $trail->push('Users', route('user.index'));
});

Breadcrumbs::for('users.show', function (BreadcrumbTrail $trail, User $user): void
{
    $trail->parent('user.index');
    $trail->push($user->name, route('user.show', $user));
});

Breadcrumbs::for('user.create', function (BreadcrumbTrail $trail, User $user): void
{
    $trail->parent('user.show');
    $trail->push('Create', route('user.create', $user));
});

Breadcrumbs::for('user.edit', function (BreadcrumbTrail $trail, User $user): void
{
    $trail->parent('user.show');
    $trail->push('Edit', route('user.edit', $user));
});

// PATIENT

Breadcrumbs::for('patient.index', function (BreadcrumbTrail $trail): void
{
    $trail->parent('home');
    $trail->push('Patients', route('patient.index'));
});

Breadcrumbs::for('patient.show', function (BreadcrumbTrail $trail, string $id): void
{
    $trail->parent('patient.index');
    $patient = PersonPatient::where('id', '=', $id)->firstOrFail();
    $trail->push($patient->mr_number.' - '.$patient->fullname, route('patient.show', $id));
});

Breadcrumbs::for('patient.create', function (BreadcrumbTrail $trail): void
{
    $trail->parent('patient.index');
    $trail->push('Add New Patient', route('patient.create'));
});

Breadcrumbs::for('patient.edit', function (BreadcrumbTrail $trail, string $id): void
{
    $trail->parent('patient.index');
    $patient = PersonPatient::where('id', '=', $id)->firstOrFail();
    $trail->push($patient->mr_number.' - '.$patient->fullname, route('patient.edit', $id));
});

// DOCTOR

Breadcrumbs::for('doctor.index', function (BreadcrumbTrail $trail): void
{
    $trail->parent('home');
    $trail->push('Doctors', route('doctor.index'));
});

Breadcrumbs::for('doctor.show', function (BreadcrumbTrail $trail, PersonEmployee $doctor): void
{
    $trail->parent('doctor.index');
    $trail->push($doctor->name, route('doctor.show', $doctor));
});

Breadcrumbs::for('doctor.create', function (BreadcrumbTrail $trail, PersonEmployee $doctor): void
{
    $trail->parent('doctor.show');
    $trail->push('Create', route('doctor.create', $doctor));
});

Breadcrumbs::for('doctor.edit', function (BreadcrumbTrail $trail, PersonEmployee $doctor): void
{
    $trail->parent('doctor.show');
    $trail->push('Edit', route('doctor.edit', $doctor));
});


// DOCTOR SCHEDULE

Breadcrumbs::for('doctorSchedule.index', function (BreadcrumbTrail $trail): void
{
    $trail->parent('home');
    $trail->push('Doctor Schedules', route('doctorSchedule.index'));
});

Breadcrumbs::for('doctorSchedule.show', function (BreadcrumbTrail $trail, PersonSchedule $doctorSchedule): void
{
    $trail->parent('doctorSchedule.index');
    $trail->push($doctorSchedule->name, route('doctorSchedule.show', $doctorSchedule));
});

Breadcrumbs::for('doctorSchedule.create', function (BreadcrumbTrail $trail, PersonSchedule $doctorSchedule): void
{
    $trail->parent('doctorSchedule.show');
    $trail->push('Create', route('doctorSchedule.create', $doctorSchedule));
});

Breadcrumbs::for('doctorSchedule.edit', function (BreadcrumbTrail $trail, PersonSchedule $doctorSchedule): void
{
    $trail->parent('doctorSchedule.show');
    $trail->push('Edit', route('doctorSchedule.edit', $doctorSchedule));
});

// MEDICAL ADMISSION

Breadcrumbs::for('ma.index', function (BreadcrumbTrail $trail): void
{
    $trail->parent('home');
    $trail->push('Medical Admissions', route('ma.index'));
});

Breadcrumbs::for('ma.show', function (BreadcrumbTrail $trail, MedicalAdmission $ma): void
{
    $trail->parent('ma.index');
    $trail->push($ma->name, route('ma.show', $ma));
});

Breadcrumbs::for('ma.create', function (BreadcrumbTrail $trail, MedicalAdmission $ma): void
{
    $trail->parent('ma.show');
    $trail->push('Create', route('ma.create', $ma));
});

Breadcrumbs::for('ma.edit', function (BreadcrumbTrail $trail, MedicalAdmission $ma): void
{
    $trail->parent('ma.show');
    $trail->push('Edit', route('ma.edit', $ma));
});

// MEDICAL EXAMINATION

Breadcrumbs::for('me.index', function (BreadcrumbTrail $trail): void
{
    $trail->parent('home');
    $trail->push('Medical Examinations', route('me.index'));
});

Breadcrumbs::for('me.show', function (BreadcrumbTrail $trail, MedicalExamination $ma): void
{
    $trail->parent('me.index');
    $trail->push($ma->name, route('me.show', $ma));
});

Breadcrumbs::for('me.create', function (BreadcrumbTrail $trail, MedicalExamination $ma): void
{
    $trail->parent('me.show');
    $trail->push('Create', route('me.create', $ma));
});

Breadcrumbs::for('me.edit', function (BreadcrumbTrail $trail, MedicalExamination $ma): void
{
    $trail->parent('me.show');
    $trail->push('Edit', route('me.edit', $ma));
});

// MEDICAL RECORD

Breadcrumbs::for('mr.index', function (BreadcrumbTrail $trail): void
{
    $trail->parent('home');
    $trail->push('Medical Records', route('mr.index'));
});

Breadcrumbs::for('mr.show', function (BreadcrumbTrail $trail, MedicalExamination $mr): void
{
    $trail->parent('mr.index');
    $trail->push($mr->name, route('mr.show', $mr));
});

Breadcrumbs::for('mrByPatient.show', function (BreadcrumbTrail $trail, MedicalExamination $mr): void
{
    $trail->parent('mr.index');
    $trail->push($mr->name, route('mrByPatient.show', $mr));
});

// TARIFF

Breadcrumbs::for('tariff.index', function (BreadcrumbTrail $trail): void
{
    $trail->parent('home');
    $trail->push('Tariffs', route('tariff.index'));
});

Breadcrumbs::for('tariff.show', function (BreadcrumbTrail $trail, string $id): void
{
    $trail->parent('tariff.index');
    $tariff = Tariff::where('id', '=', $id)->firstOrFail();
    $trail->push($tariff->tariff_code.' - '.$tariff->tariff_name, route('tariff.show', $id));
});

Breadcrumbs::for('tariff.create', function (BreadcrumbTrail $trail): void
{
    $trail->parent('tariff.index');
    $trail->push('Add New', route('tariff.create'));
});

Breadcrumbs::for('tariff.edit', function (BreadcrumbTrail $trail, string $id): void
{
    $trail->parent('tariff.index');
    $tariff = Tariff::where('id', '=', $id)->firstOrFail();
    $trail->push($tariff->tariff_code.' - '.$tariff->tariff_name, route('tariff.edit', $id));
});
