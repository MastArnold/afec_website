<?php

namespace App\Repositories\Eloquent;

use App\Models\General;
use App\Repositories\Contracts\GeneralRepositoryInterface;

class GeneralRepository extends BaseRepository implements GeneralRepositoryInterface
{
    public function __construct(General $model)
    {
        parent::__construct($model);
    }
}
