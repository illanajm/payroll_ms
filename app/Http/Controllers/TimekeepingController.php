<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimekeepingController extends Controller
{
    public function index()
    {
        return view('timekeeping.index');
    }

    public function add()
    {
        return view('timekeeping.add');
    }
}
