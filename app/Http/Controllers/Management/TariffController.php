<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Tariff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
        $request = Request::create(request()->getHttpHost().'/api/management/tariff', 'GET');
        // $request->headers->set('Authorization', 'Bearer '.'your_api_token');
        $response = Route::dispatch($request);
        $responseBody = json_decode($response->getContent(), true);

        $tariffs = Tariff::hydrate($responseBody['data']);
        return view('management.tariff', compact('tariffs'));
    }

    public function show($id)
    {
        $tariff = Tariff::where('id', '=', $id)->firstOrFail();
        return view('management.tariffShow', compact('tariff'));
    }

    public function create()
    {
        return view('management.tariffCreate');
    }

    public function store()
    {
        $tariffs = Tariff::all();
        return view('management.tariff', compact('tariffs'));
    }

    public function edit($id)
    {
        $tariff = Tariff::where('id', '=', $id)->firstOrFail();
        return view('management.tariffEdit', compact('tariff'));
    }

    public function update()
    {
        $tariffs = Tariff::all();
        return view('management.tariff', compact('tariffs'));
    }

    public function destroy()
    {
        $tariffs = Tariff::all();
        return view('management.tariff', compact('tariffs'));
    }
}
