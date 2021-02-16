<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use App\Models\Leave_Type;
use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{
    protected $leave_type;
    protected $request;

    public function __construct(LeaveType $leave_type, Request $request)
    {
        $this->leavetype = $leave_type;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->leavetype->all();
        return view('leave.index',[
            'leave' => $data
        ]);
    }

    public function types()
    {
        $data = $this->leavetype->all();
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
        $this->leavetype->create($this->request->except('_token'));
        return Redirect::route('leave.index')->with([
            'success' => 'data inserted'
        ]);
    }
}
