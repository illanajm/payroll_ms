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
    
    public function __construct(DeductionRepositoryInterface $deduction, Request $request)
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
        $data = $this->deduction->getByContribution($contribute);
     
        return view($direction[$contribute],[
            'data' => $data
        ]);
        
    }

    public function tax_index()
    {
        $contribute = 'tax';
        $data = $this->deduction->getByContribution($contribute);
        return view('deduction.tax.index',[
            'data' => $data
        ]);
    }

    public function sss_index()
    {
        $contribute = 'sss';
        $data = $this->deduction->getByContribution($contribute);
        return view('deduction.sss.index',[
            'data' => $data
        ]);
    }

    public function phil_index()
    {
        $contribute = 'philhealth';
        $data = $this->deduction->getByContribution($contribute);
        return view('deduction.philhealth.index',[
            'data' => $data
        ]);
    }

    public function pagibig_index()
    {
        $contribute = 'pagibig';
        $data = $this->deduction->getByContribution($contribute);
        return view('deduction.pagibig.index',[
            'data' => $data
        ]);
    }

    public function delete($id)
    {
        $this->deduction->delete($id);
        return back();
    }
    
}
