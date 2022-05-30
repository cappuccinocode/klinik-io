<?php

namespace App\Http\Controllers\Admission;

use App\Http\Controllers\Controller;
use App\Models\PersonSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class DoctorScheduleController extends Controller
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
        $request = Request::create(request()->getHttpHost().'/api/admission/schedule', 'GET');
        // $request->headers->set('Authorization', 'Bearer '.'your_api_token');
        $response = Route::dispatch($request);
        $responseBody = json_decode($response->getContent(), true);

        $doctorSchedules = null;
        if (count($responseBody['data']) <= 0) {
            $responseBody['data'] = PersonSchedule::all();
        } else {
            $doctorSchedules = PersonSchedule::hydrate($responseBody['data']);
        }
        return view('admission.doctorSchedule', compact('doctorSchedules'));
    }

    public function show()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctorSchedule', compact('doctorSchedules'));
    }

    public function create()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctorSchedule.create', compact('doctorSchedules'));
    }

    public function store()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctorSchedule', compact('doctorSchedules'));
    }

    public function edit()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctorSchedule.edit', compact('doctorSchedules'));
    }

    public function update()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctorSchedule', compact('doctorSchedules'));
    }

    public function destroy()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctorSchedule', compact('doctorSchedules'));
    }
}
