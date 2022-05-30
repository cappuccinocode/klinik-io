<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = User::all();
        return view('administration.user', compact('users'));
    }

    public function show()
    {
        $users = User::all();
        return view('administration.user', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('administration.user', compact('users'));
    }

    public function store()
    {
        $users = User::all();
        return view('administration.user', compact('users'));
    }

    public function edit()
    {
        $users = User::all();
        return view('administration.user', compact('users'));
    }

    public function update()
    {
        $users = User::all();
        return view('administration.user', compact('users'));
    }

    public function destroy()
    {
        $users = User::all();
        return view('administration.user', compact('users'));
    }
}
