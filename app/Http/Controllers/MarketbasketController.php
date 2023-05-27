<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketbasketController extends Controller
{
    public function showmarketbasket()
    {
        return view('marketbasket');
    }
}
