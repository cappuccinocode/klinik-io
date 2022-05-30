<?php

namespace App\Http\Controllers\Admission;

use App\Http\Controllers\Controller;
use App\Models\MedicalExamination;
use App\Models\PersonPatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MedicalRecordController extends Controller
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
        $request = Request::create(request()->getHttpHost().'/api/admission/medicalrecord', 'GET');
        // $request->headers->set('Authorization', 'Bearer '.'your_api_token');
        $response = Route::dispatch($request);
        $responseBody = json_decode($response->getContent(), true);

        $medicalRecords = null;
        if (count($responseBody['data']) <= 0) {
            $responseBody['data'] = MedicalExamination::all();
        } else {
            $medicalRecords = MedicalExamination::hydrate($responseBody['data']);
        }
        return view('admission.medicalRecord', compact('medicalRecords'));
    }

    public function show($id)
    {
        $request = Request::create(request()->getHttpHost().'/api/admission/medical/record/'.$id, 'GET');
        // $request->headers->set('Authorization', 'Bearer '.'your_api_token');
        $response = Route::dispatch($request);
        $responseBody = json_decode($response->getContent(), true);

        $medicalRecord = MedicalExamination::hydrate($responseBody['data']);
        return view('admission.medicalRecord', compact('medicalRecord'));
    }

    public function showByPatient($id)
    {
        $request = Request::create(request()->getHttpHost().'/api/admission/medical/record/patient/'.$id, 'GET');
        // $request->headers->set('Authorization', 'Bearer '.'your_api_token');
        $response = Route::dispatch($request);
        $responseBody = json_decode($response->getContent(), true);

        $medicalRecords = MedicalExamination::hydrate($responseBody['data']);
        return view('admission.medicalRecordByPatient', compact('medicalRecords'));
    }
}
