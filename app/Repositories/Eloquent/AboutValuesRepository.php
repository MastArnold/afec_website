<?php

namespace App\Repositories\Eloquent;

use App\Models\AboutValues;
use App\Repositories\Contracts\AboutValuesRepositoryInterface;

class AboutValuesRepository extends BaseRepository implements AboutValuesRepositoryInterface
{
    public function __construct(AboutValues $model)
    {
        parent::__construct($model);
    }
}
