<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Repositories\Interfaces\DepartmentRepositoryInterface;

class DepartmentController extends Controller

{
    private $DepartmentRepository;
    protected $department;
    protected $request;

    public function __construct(DepartmentRepositoryInterface $DepartmentRepository, Request $request)
    {
        $this->department = $DepartmentRepository;
        $this->request = $request;
    }

    public function index()
    {
        $department = $this->department->all();
        return view('department.index',[
            'department' => $department
        ]);
    }

    public function show($id)
    {
        return $this->model->show($id);
    }

    public function add()
    {
        return view('department.add');
    }

    public function store()
    {
       $department =  $this->department->create($this->request->except('_token'));
       return Redirect::route('department.index')->with([
        'success'=>'data has been updated'
    ]);
    }

    public function update_form($id)
    {

        return view('department.update')->with(['department'=>$this->department->find($id)]);
    }

    public function update($id)
    {
        try{ 
            $message = $this->department->update($id) ? [
                'success'=>'data has been updated'
            ] : [
                'error'=>'error'
            ];
            
            return Redirect::route('department.index')->with($message);
        }catch(Exception $e){
            abort(500);
        }
    }

    public function delete($id)
    {
        $this->department->delete($id);
        return Redirect::route('department.index')->with([
            'success'=>'data has been deleted'
        ]);
    }
}