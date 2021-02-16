<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhilHealthController extends Controller
{
    public function index()
    {
        return view('deduction.philhealth.index');
    }
}
