<?php

namespace App\Repositories\Eloquent;

use App\Models\Home;
use App\Repositories\Contracts\HomeRepositoryInterface;

class HomeRepository extends BaseRepository implements HomeRepositoryInterface
{
    public function __construct(Home $model)
    {
        parent::__construct($model);
    }

    public function activeOnly() : Home{
        return $this->model->where('is_active', true)->first();
    }

    public function unactiveCurrent() : bool{
        return $this->model->where('is_active', true)->update(['is_active' => false]);
    }
}
