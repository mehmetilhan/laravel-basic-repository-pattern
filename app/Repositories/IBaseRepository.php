<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface IBaseRepository
{

    public function find($id): ?Model;

    public function create(array $attributes): Model;

    public function getAll(): Collection;

    public function getCount():int;

    public function getByName($name):?Model;

}
