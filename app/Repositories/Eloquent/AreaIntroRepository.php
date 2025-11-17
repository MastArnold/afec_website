<?php

namespace App\Repositories\Eloquent;

use App\Models\AreaIntro;
use App\Repositories\Contracts\AreaIntroRepositoryInterface;

class AreaIntroRepository extends BaseRepository implements AreaIntroRepositoryInterface
{
    public function __construct(AreaIntro $model)
    {
        parent::__construct($model);
    }
}
