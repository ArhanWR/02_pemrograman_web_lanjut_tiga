<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProductController extends Controller
{
    public function product1()
    {
        return view('product.product1');
    }

    public function product2()
    {
        return view('product.product2');
    }
    
    public function product3()
    {
        return view('product.product3');
    }

    public function product4()
    {
        return view('product.product4');
    }
}
