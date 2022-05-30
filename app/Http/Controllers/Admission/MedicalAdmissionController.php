<?php

namespace App\Http\Controllers\Admission;

use App\Http\Controllers\Controller;
use App\Models\MedicalAdmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MedicalAdmissionController extends Controller
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
        $request = Request::create(request()->getHttpHost().'/api/admission/registration', 'GET');
        // $request->headers->set('Authorization', 'Bearer '.'your_api_token');
        $response = Route::dispatch($request);
        $responseBody = json_decode($response->getContent(), true);

        $medicalAdmissions = MedicalAdmission::hydrate($responseBody['data']);
        return view('admission.medicalAdmission', compact('medicalAdmissions'));
    }

    public function show()
    {
        $medicals = Medical::all();
        return view('admission.medical', compact('medicals'));
    }

    public function create()
    {
        $medicals = Medical::all();
        return view('admission.medical', compact('medicals'));
    }

    public function store()
    {
        $medicals = Medical::all();
        return view('admission.medical', compact('medicals'));
    }

    public function edit()
    {
        $medicals = Medical::all();
        return view('admission.medical', compact('medicals'));
    }

    public function update()
    {
        $medicals = Medical::all();
        return view('admission.medical', compact('medicals'));
    }

    public function destroy()
    {
        $medicals = Medical::all();
        return view('admission.medical', compact('medicals'));
    }
}
