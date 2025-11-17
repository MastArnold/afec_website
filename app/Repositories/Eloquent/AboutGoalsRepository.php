<?php

namespace App\Repositories\Eloquent;

use App\Models\AboutGoals;
use App\Repositories\Contracts\AboutGoalsRepositoryInterface;

class AboutGoalsRepository extends BaseRepository implements AboutGoalsRepositoryInterface
{
    public function __construct(AboutGoals $model)
    {
        parent::__construct($model);
    }
}
