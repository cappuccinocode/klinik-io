<?php

namespace App\Http\Controllers\API\Admission;

use App\Helpers\APIFormatter;
use App\Http\Controllers\Controller;
use App\Models\PersonSchedule;
use Exception;
use Illuminate\Http\Request;

class PersonScheduleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $personSchedules = PersonSchedule::all();

        if ($personSchedules) {
            return APIFormatter::createAPI('200', 'Success', $personSchedules);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function show($id)
    {
        $personSchedule = PersonSchedule::where('id', '=', $id)->get();

        if ($personSchedule) {
            return APIFormatter::createAPI('200', 'Success', $personSchedule);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function create()
    {
        $doctors = PersonSchedule::all();
        return view('admission.doctorSchedule.create', compact('doctorSchedules'));
    }

    public function store()
    {
        $doctors = PersonSchedule::all();
        return view('admission.doctorSchedule', compact('doctorSchedules'));
    }

    public function edit()
    {
        $doctors = PersonSchedule::all();
        return view('admission.doctorSchedule.edit', compact('doctorSchedules'));
    }

    public function update()
    {
        $doctors = PersonSchedule::all();
        return view('admission.doctorSchedule', compact('doctorSchedules'));
    }

    public function destroy()
    {
        $doctors = PersonSchedule::all();
        return view('admission.doctorSchedule', compact('doctorSchedules'));
    }
}
