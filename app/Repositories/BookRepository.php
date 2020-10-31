<?php


namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;

class BookRepository implements IBaseRepository
{

    protected $model;

    public function __construct(Book $model)
    {
        $this->model = $model;
    }

    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function create(array $attributes): Model
    {
        // TODO: Implement create() method.
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function getByName($name):?Model
    {
        return $this->model->where('name','LIKE','%'.$name.'%')->firstOrFail();
    }

    public function getCount():int
    {
        return $this->model->count();
    }

    public function getLastRow():?Model
    {
        return $this->model->orderBy('id', 'DESC')->first();
    }


}
