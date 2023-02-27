<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProgramController extends Controller
{
    public function program1()
    {
        return view('program.program1');
    }

    public function program2()
    {
        return view('program.program2');
    }

    public function program3()
    {
        return view('program.program3');
    }
}
