<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\LoanRepository;
use App\Repositories\Eloquent\LeaveRepository;
use App\Repositories\Eloquent\DepartmentRepository;
use App\Repositories\Interfaces\LoanRepositoryInterface;
use App\Repositories\Interfaces\LeaveRepositoryInterface;
use App\Repositories\Interfaces\EloquentRepositoryInterface;
use App\Repositories\Interfaces\DepartmentRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(DepartmentRepositoryInterface::class, DepartmentRepository::class);
        $this->app->bind(LoanRepositoryInterface::class, LoanRepository::class);
        $this->app->bind(LeaveRepositoryInterface::class, LeaveRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
