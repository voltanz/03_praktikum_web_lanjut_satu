<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir()
    {
        return view('program');
    }

    public function magang()
    {
        return view('program2');
    }
}
