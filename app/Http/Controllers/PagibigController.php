<?php

namespace App\Http\Controllers;
use App\Models\Deduction;
use Illuminate\Http\Request;

class PagibigController extends Controller
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
        $data = $this->deduction->where('contribution','=','pagibig')->get();
        return view('deduction.pagibig.index',[
            'data' => $data
        ]);
    }
}
