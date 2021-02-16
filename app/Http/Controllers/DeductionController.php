<?php

namespace App\Http\Controllers;

use App\Models\Deduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Repositories\Interfaces\DeductionRepositoryInterface;

class DeductionController extends Controller
{
    protected $deduction;
    protected $request;
    
    public function __construct(Deduction $deduction, Request $request)
    {
        $this->deduction = $deduction;
        $this->request = $request;
    }
    public function add()
    {
        return view('deduction.add');
    }

    public function store()
    {
        $this->deduction->create($this->request->except('_token'));
        $contribute = $this->request->contribution;

        $direction = [
            'tax' => 'deduction.tax.index',
            'sss' => 'deduction.sss.index',
            'philhealth' => 'deduction.philhealth.index',
            'pagibig' => 'deduction.pagibig.index'
        ];
        $data = $this->deduction->where('contribution','=',$contribute)->get();
     
        return view($direction[$contribute],[
            'data' => $data
        ]);
        
    }
    
}
