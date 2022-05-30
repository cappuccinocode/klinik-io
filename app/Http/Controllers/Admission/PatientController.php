<?php

namespace App\Http\Controllers\Admission;

use App\Http\Controllers\Controller;
use App\Models\PersonPatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PatientController extends Controller
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
        $request = Request::create(request()->getHttpHost().'/api/admission/patient', 'GET');
        // $request->headers->set('Authorization', 'Bearer '.'your_api_token');
        $response = Route::dispatch($request);
        $responseBody = json_decode($response->getContent(), true);

        $patients = PersonPatient::hydrate($responseBody['data']);
        return view('admission.patient', compact('patients'));
    }

    public function show($id)
    {
        $patient = PersonPatient::where('id', '=', $id)->firstOrFail();
        return view('admission.patientShow', compact('patient'));
    }

    public function create()
    {
        return view('admission.patientCreate');
    }

    public function store()
    {
        $patients = PersonPatient::all();
        return view('admission.patient', compact('patients'));
    }

    public function edit($id)
    {
        $patient = PersonPatient::where('id', '=', $id)->firstOrFail();
        return view('admission.patientEdit', compact('patient'));
    }

    public function update()
    {
        $patients = PersonPatient::all();
        return view('admission.patient', compact('patients'));
    }

    public function destroy()
    {
        $patients = PersonPatient::all();
        return view('admission.patient', compact('patients'));
    }
}
