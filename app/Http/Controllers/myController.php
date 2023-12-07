<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class myController extends Controller
{
    function ciao()
    {
        return view('ciao');
    }
    function questa()
    {
        return view('questa');
    }
}