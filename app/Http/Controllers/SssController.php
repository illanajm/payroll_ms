<?php

namespace App\Http\Controllers;

use App\Models\Deduction;
use Illuminate\Http\Request;

class SssController extends Controller
{
    protected $deduction;
    protected $request;
    
    public function __construct(Deduction $deduction, Request $request)
    {
        $this->deduction = $deduction;
        $this->request = $request;
    }
    public function index()
    {
        $data = $this->deduction->where('contribution','=','sss')->get();
        return view('deduction.sss.index',[
            'data' => $data
        ]);
    }
}
