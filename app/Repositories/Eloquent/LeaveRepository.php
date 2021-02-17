<?php
namespace App\Repositories\Eloquent;

use App\Models\LeaveType;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\LeaveRepository;
use App\Repositories\Interfaces\LeaveRepositoryInterface;

class LeaveRepository extends BaseRepository implements LeaveRepositoryInterface
{
    public function __construct(LeaveType $model)
    {
        $this->model = $model;
    }
}