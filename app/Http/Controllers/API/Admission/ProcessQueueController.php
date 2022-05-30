<?php

namespace App\Http\Controllers\API\Admission;

use App\Helpers\APIFormatter;
use App\Http\Controllers\Controller;
use App\Models\ProcessQueue;
use Illuminate\Http\Request;

class ProcessQueueController extends Controller
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
        $queues = ProcessQueue::all();
        return view('admission.queue', compact('queues'));
    }

    public function show()
    {
        $queues = ProcessQueue::all();
        return view('admission.queue', compact('queues'));
    }

    public function create()
    {
        $queues = ProcessQueue::all();
        return view('admission.queue', compact('queues'));
    }

    public function store()
    {
        $queues = ProcessQueue::all();
        return view('admission.queue', compact('queues'));
    }

    public function edit()
    {
        $queues = ProcessQueue::all();
        return view('admission.queue', compact('queues'));
    }

    public function update()
    {
        $queues = ProcessQueue::all();
        return view('admission.queue', compact('queues'));
    }

    public function destroy()
    {
        $queues = ProcessQueue::all();
        return view('admission.queue', compact('queues'));
    }
}
