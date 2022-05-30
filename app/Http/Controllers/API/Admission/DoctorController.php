<?php

namespace App\Http\Controllers\API\Admission;

use App\Helpers\APIFormatter;
use App\Http\Controllers\Controller;
use App\Models\PersonEmployee;
use Illuminate\Http\Request;

class DoctorController extends Controller
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
        $doctors = PersonEmployee::where('employee_type', '=', 'DR')->get();

        if ($doctors) {
            return APIFormatter::createAPI('200', 'Success', $doctors);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function show($id)
    {
        $doctor = PersonEmployee::where('id', '=', $id)->get();

        if ($doctor) {
            return APIFormatter::createAPI('200', 'Success', $doctor);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function create()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctor', compact('doctors'));
    }

    public function store()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctor', compact('doctors'));
    }

    public function edit()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctor', compact('doctors'));
    }

    public function update()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctor', compact('doctors'));
    }

    public function destroy()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctor', compact('doctors'));
    }
}
