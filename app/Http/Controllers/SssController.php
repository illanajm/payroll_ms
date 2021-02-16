<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SssController extends Controller
{
    public function index()
    {
        return view('deduction.sss.index');
    }
}
