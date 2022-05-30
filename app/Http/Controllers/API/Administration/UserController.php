<?php

namespace App\Http\Controllers\API\Administration;

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
        $users = Tariff::all();

        if ($users) {
            return APIFormatter::createAPI('200', 'Success', $users);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
    }

    public function show($id)
    {
        $user = User::where('id', '=', $id)->get();

        if ($user) {
            return APIFormatter::createAPI('200', 'Success', $user);
        } else {
            return APIFormatter::createAPI('400', 'Failed', null);
        }
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
