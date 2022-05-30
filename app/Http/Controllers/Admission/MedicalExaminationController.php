<?php

namespace App\Http\Controllers\Admission;

use App\Http\Controllers\Controller;
use App\Models\MedicalExamination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MedicalExaminationController extends Controller
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
        $request = Request::create(request()->getHttpHost().'/api/admission/examination', 'GET');
        // $request->headers->set('Authorization', 'Bearer '.'your_api_token');
        $response = Route::dispatch($request);
        $responseBody = json_decode($response->getContent(), true);

        $medicalExaminations = MedicalExamination::hydrate($responseBody['data']);
        return view('admission.medicalExamination', compact('medicalExaminations'));
    }

    public function show()
    {
        $examinations = MedicalExamination::all();
        return view('admission.examination', compact('examinations'));
    }

    public function create()
    {
        $examinations = MedicalExamination::all();
        return view('admission.examination', compact('examinations'));
    }

    public function store()
    {
        $examinations = MedicalExamination::all();
        return view('admission.examination', compact('examinations'));
    }

    public function edit()
    {
        $examinations = MedicalExamination::all();
        return view('admission.examination', compact('examinations'));
    }

    public function update()
    {
        $examinations = MedicalExamination::all();
        return view('admission.examination', compact('examinations'));
    }

    public function destroy()
    {
        $examinations = MedicalExamination::all();
        return view('admission.examination', compact('examinations'));
    }
}
