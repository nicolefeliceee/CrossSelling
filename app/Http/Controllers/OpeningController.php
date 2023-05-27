<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpeningController extends Controller
{
    public function showopening()
    {
        return view('opening');
    }
}
