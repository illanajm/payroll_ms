<?php
namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\EloquentRepositoryInterface;

interface EloquentRepositoryInterface
{
    public function create(array $attributes);
    public function all();
    public function delete($id);
    public function update($id);
    public function show($id);
}