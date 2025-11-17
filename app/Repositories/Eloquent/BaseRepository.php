<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(array $columns = ['*']): Collection
    {
        return $this->model->newQuery()->get($columns);
    }

    public function paginate(int $perPage = 15, array $columns = ['*']): LengthAwarePaginator
    {
        return $this->model->newQuery()->select($columns)->paginate($perPage);
    }

    public function find(int $id, array $columns = ['*']): ?Model
    {
        return $this->model->newQuery()->select($columns)->find($id);
    }

    public function create(array $data): Model
    {
        return $this->model->newQuery()->create($data);
    }

    public function update(int $id, array $data): bool
    {
        $instance = $this->find($id);
        return $instance ? $instance->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $instance = $this->find($id);
        return $instance ? (bool) $instance->delete() : false;
    }
}
