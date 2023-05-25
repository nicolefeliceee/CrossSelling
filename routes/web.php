<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('tes');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('opening');
});

Route::get('/opening', function () {
    return view('opening');
})->name('opening');

Route::get('/showchart', function () {
    return view('content.showchart');
})->name('showchart');

Route::get('/customerseg', function () {
    return view('content.customerseg');
})->name('customerseg');

Route::get('/marketbasket', function () {
    return view('content.marketbasket');
})->name('marketbasket');
