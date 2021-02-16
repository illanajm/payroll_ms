<?php
namespace App\Repositories\Eloquent;

use App\Models\LoanType;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\LoanRepository;
use App\Repositories\Interfaces\LoanRepositoryInterface;

class LoanRepository extends BaseRepository implements LoanRepositoryInterface
{
    public function __construct(LoanType $model)
    {
        $this->model = $model;
    }
}