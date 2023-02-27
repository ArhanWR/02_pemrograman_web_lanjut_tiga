<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController extends Controller
{
    public function index()
    {
        return "Selamat Datang! Anda berada di Halaman Home";
    }

    public function about()
    {
        return view('about');
    }
}
