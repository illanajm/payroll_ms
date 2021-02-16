<?php

namespace App\Repositories\Interfaces;

interface DeductionRepositoryInterface
{
    public function getByContribution($contribution);
}