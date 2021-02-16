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
    
    public function where($attributes)
    {
        $this->model->where($attributes)->get();
    }
}
