<?php

namespace App\Repositories\Eloquent;

use App\Models\Deduction;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\DeductionRepository;
use App\Repositories\Interfaces\DeductionRepositoryInterface;

class DeductionRepository extends BaseRepository implements DeductionRepositoryInterface
{
    public function __construct(Deduction $model)
    {
        $this->model = $model;
    }
    
    public function getByContribution($contribution)
    {
        return $this->model->where('contribution','=',$contribution)->get();
    }
}
