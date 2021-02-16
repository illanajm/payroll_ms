<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function index()
    {
        return view('deduction.tax.index');
    }
}
