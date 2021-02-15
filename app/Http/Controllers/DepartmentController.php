<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DepartmentController extends Controller

{
    protected $department;
    protected $request;

    public function __construct(Department $department, Request $request)
    {
        $this->department = $department;
        $this->request = $request;
    }

    public function index()
    {
        $department = $this->department->all();
        return view('department.index',[
            'department' => $department
        ]);
    }

    public function add()
    {
        return view('department.add');
    }

    public function store()
    {
        $this->department->create($this->request->except('_token'));
        return Redirect::route('department.index')->with([
            'success'=>'department added'
        ]);
    }

    public function update_form($id)
    {

        return view('department.update')->with(['department'=>$this->department->find($id)]);
    }

    public function update($id)
    {
        $this->department->find($id)->update($this->request->except('_token'));
        return Redirect::route('department.index')->with([
            'success'=>'data has been updated'
        ]);
    }

    public function delete($id)
    {
        $this->department->findorfail($id)->delete();
        return Redirect::route('department.index')->with([
            'success'=>'data has been deleted'
        ]);
    }
}