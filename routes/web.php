<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
$data = [
    'title' => 'Ciao Mondo',
    'message' => 'ciao',
];

    return view('hompage', $data);
});

Route::get('/ciao', function () {

    return view('ciao');
});

Route::get('/questa', function () {

    return view('questa');
});

