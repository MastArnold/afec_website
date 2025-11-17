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
}
