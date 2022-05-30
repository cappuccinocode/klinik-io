<?php

namespace App\Http\Controllers\API\Admission;

use App\Helpers\APIFormatter;
use App\Http\Controllers\Controller;
use App\Models\MedicalAdmission;
use Illuminate\Http\Request;

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
        $medicalAdmissions = MedicalAdmission::all();

        if ($medicalAdmissions) {
            return APIFormatter::createAPI('200', 'Success', $medicalAdmissions);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function show($id)
    {
        $medicalAdmission = MedicalAdmission::where('id', '=', $id)->get();

        if ($medicalAdmission) {
            return APIFormatter::createAPI('200', 'Success', $medicalAdmission);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
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
