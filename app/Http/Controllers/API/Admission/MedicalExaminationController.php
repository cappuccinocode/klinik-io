<?php

namespace App\Http\Controllers\API\Admission;

use App\Helpers\APIFormatter;
use App\Http\Controllers\Controller;
use App\Models\MedicalExamination;
use Illuminate\Http\Request;

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
