<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Repositories\Interfaces\LeaveRepositoryInterface;

class LeaveTypeController extends Controller
{
    protected $leave_type;
    protected $request;

    public function __construct(LeaveRepositoryInterface $leave_type, Request $request)
    {
        $this->leave_type = $leave_type;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->leave_type->all();
        return view('leave.index',[
            'leave' => $data
        ]);
    }

    public function types()
    {
        $data = $this->leave_type->all();
        return view('leave.types',[
            'leave' => $data
        ]);
    }

    public function store_form()
    {
        return view('leave.add');
    }

    public function store()
    {
        $this->leave_type->create($this->request->except('_token'));
        return Redirect::route('leave.index')->with([
            'success' => 'data inserted'
        ]);
      
    }

    public function update_form($id)
    {
        return view('leave.update')->with(['data' => $this->leave_type->find($id)]);
       
    }

    public function update($id)
    {
        $this->leave_type->find($id)->update($this->request->except('_token'));
        return Redirect::route('leave.types')->with([
          'success' => 'data inserted'
      ]);
    }

    public function delete($id)
    {
        $this->leave_type->delete($id);
        return Redirect::route('leave.types')->with([
            'success' => 'data inserted'
        ]);
    }
}
