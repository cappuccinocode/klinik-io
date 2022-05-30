<?php

namespace App\Http\Controllers\API\Admission;

use App\Helpers\APIFormatter;
use App\Http\Controllers\Controller;
use App\Models\MedicalExamination;
use Illuminate\Http\Request;

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
        $medicalExaminations = MedicalExamination::all();

        if ($medicalExaminations) {
            return APIFormatter::createAPI('200', 'Success', $medicalExaminations);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function show($id)
    {
        $medicalExamination = MedicalExamination::where('id', '=', $id)->get();

        if ($medicalExamination) {
            return APIFormatter::createAPI('200', 'Success', $medicalExamination);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function showByUser($id)
    {
        $medicalExaminations = MedicalExamination::where('person_patient_id', '=', $id)->get();

        if ($medicalExaminations) {
            return APIFormatter::createAPI('200', 'Success', $medicalExaminations);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }
}
