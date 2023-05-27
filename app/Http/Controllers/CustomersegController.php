<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersegController extends Controller
{
    public function showcustomerseg()
    {
        return view('customerseg');
    }
}
