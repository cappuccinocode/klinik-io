<?php

namespace App\Http\Controllers\Admission;

use App\Http\Controllers\Controller;
use App\Models\PersonEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
        $request = Request::create(request()->getHttpHost().'/api/admission/doctor', 'GET');
        // $request->headers->set('Authorization', 'Bearer '.'your_api_token');
        $response = Route::dispatch($request);
        $responseBody = json_decode($response->getContent(), true);

        $doctors = PersonEmployee::hydrate($responseBody['data']);
        return view('admission.doctor', compact('doctors'));
    }

    public function show()
    {
        $doctors = PersonEmployee::all();
        return view('admission.doctor', compact('doctors'));
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
