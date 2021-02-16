<?php

namespace App\Http\Controllers;

use App\Models\LoanType;
use Illuminate\Http\Request;
use Redirect;

class LoanTypeController extends Controller
{
    protected $loan_type;
    protected $request;

    public function __construct(LoanType $loan_type, Request $request)
    {
        $this->loan_type = $loan_type;
        $this->request = $request;
    }

    public function index()
    {
        $loan = $this->loan_type->all();
        return view('loan.index',[
            'loan' => $loan
        ]);
    }

    public function types()
    {
        $loan = $this->loan_type->all();
        return view('loan.types',[
            'loan' => $loan
        ]);
    }

    public function add()
    {
        return view('loan.add');
    }

    public function store()
    {
        $this->loan_type->create($this->request->except('_token'));
        return Redirect::route('loan.index')->with([
            'success' => 'data inserted'
        ]);
    }

    public function update_form($id)
    {
        return view('loan.update')->with(['data'=>$this->loan_type->find($id)]);
    }

    public function update($id)
    {
        $this->loan_type->find($id)->update($this->request->except('_token'));
        return Redirect::route('loan.index')->with([
            'success' => 'data updated'
        ]);
    }

    public function delete($id)
    {
        $this->loan_type->findorfail($id)->delete();
        return Redirect::route('loan.index')->with([
            'success' => 'data deleted'
        ]);
    }


}
