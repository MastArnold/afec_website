<?php

namespace App\Repositories\Eloquent;

use App\Models\About;
use App\Repositories\Contracts\AboutRepositoryInterface;

class AboutRepository extends BaseRepository implements AboutRepositoryInterface
{
    public function __construct(About $model)
    {
        parent::__construct($model);
    }
}
