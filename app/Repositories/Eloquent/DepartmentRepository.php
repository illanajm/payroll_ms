<?php
namespace App\Repositories\Eloquent;

use App\Models\Department;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\DepartmentRepository;
use App\Repositories\Interfaces\DepartmentRepositoryInterface;

use Illuminate\Http\Request;

class DepartmentRepository extends BaseRepository implements DepartmentRepositoryInterface
{
    public function __construct(Department $model, Request $request)
    {   
        parent::__construct($model,$request);
    }
}