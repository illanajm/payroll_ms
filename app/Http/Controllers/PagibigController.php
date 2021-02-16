<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagibigController extends Controller
{
    public function index()
    {
        return view('deduction.pagibig.index');
    }
}
