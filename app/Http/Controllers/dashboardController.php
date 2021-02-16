<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.main');
    }

    public function audit()
    {
        return view('dashboard.audit');
    }
}
