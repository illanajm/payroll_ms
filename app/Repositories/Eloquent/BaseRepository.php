<?php
namespace App\Repositories\Eloquent;


use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Interfaces\EloquentRepositoryInterface;

use Illuminate\Http\Request;

class BaseRepository implements EloquentRepositoryInterface
{
    protected $model;
    protected $request;
    
    public function __construct(Model $model, Request $request)
    {
        $this->model = $model;
        $this->request = $request;
    }

    // Get all instances of model

    public function all()
    {
        return $this->model->all();
    }
    // create a new record in the database
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }


    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function delete($id)
    {
        return $this->model->findorfail($id)->delete();
    }

    public function update($id)
    {
       return $this->model->find($id)->update($this->request->except('_token'));
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->model-findOrFail($id);
    }

     // Get the associated model
     public function getModel()
     {
         return $this->model;
     }
 
     // Set the associated model
     public function setModel($model)
     {
         $this->model = $model;
         return $this;
     }
 
     // Eager load database relationships
     public function with($relations)
     {
         return $this->model->with($relations);
     }
}