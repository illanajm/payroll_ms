<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeductionController extends Controller
{
    public function add()
    {
        return view('deduction.add');
    }
}
