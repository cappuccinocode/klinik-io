<?php

namespace App\Http\Controllers\API\Admission;

use App\Helpers\APIFormatter;
use App\Http\Controllers\Controller;
use App\Models\PersonPatient;
use Exception;
use Illuminate\Http\Request;

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
        $patients = PersonPatient::all();

        if ($patients) {
            return APIFormatter::createAPI('200', 'Success', $patients);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function show($id)
    {
        $patient = PersonPatient::where('id', '=', $id)->get();

        if ($patient) {
            return APIFormatter::createAPI('200', 'Success', $patient);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function create()
    {
        $patients = PersonPatient::all();
        return view('admission.patient', compact('patients'));
    }

    public function store($request)
    {
        try {
            $request->validate([
                'fullname' => 'required',
            ]);

            $patients = PersonPatient::create([
                'fullname' => $request->fullname,
            ]);

            $data = PersonPatient::where('id', '=', $patients->id)->get();

            if ($data) {
                return APIFormatter::createAPI('200', 'Success', $data);
            } else {
                return APIFormatter::createAPI('400', 'Failed', null);
            }

        } catch (Exception $ex) {
            return APIFormatter::createAPI('400', 'Failed');
        }
    }

    public function edit()
    {
        $patients = PersonPatient::all();
        return view('admission.patient', compact('patients'));
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
