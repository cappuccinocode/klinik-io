<?php

namespace App\Http\Controllers\API\Management;

use App\Helpers\APIFormatter;
use App\Http\Controllers\Controller;
use App\Models\Tariff;
use Illuminate\Http\Request;

class TariffController extends Controller
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
        $tariffs = Tariff::all();

        if ($tariffs) {
            return APIFormatter::createAPI('200', 'Success', $tariffs);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function show($id)
    {
        $tariff = Tariff::where('id', '=', $id)->get();

        if ($tariff) {
            return APIFormatter::createAPI('200', 'Success', $tariff);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function create()
    {
        $tariffs = Tariff::all();
        return view('admission.tariff', compact('tariffs'));
    }

    public function store()
    {
        $tariffs = Tariff::all();
        return view('admission.tariff', compact('tariffs'));
    }

    public function edit()
    {
        $tariffs = Tariff::all();
        return view('admission.tariff', compact('tariffs'));
    }

    public function update()
    {
        $tariffs = Tariff::all();
        return view('admission.tariff', compact('tariffs'));
    }

    public function destroy()
    {
        $tariffs = Tariff::all();
        return view('admission.tariff', compact('tariffs'));
    }
}
