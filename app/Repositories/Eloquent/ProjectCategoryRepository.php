<?php

namespace App\Repositories\Eloquent;

use App\Models\ProjectCategory;
use App\Repositories\Contracts\ProjectCategoryRepositoryInterface;

class ProjectCategoryRepository extends BaseRepository implements ProjectCategoryRepositoryInterface
{
    public function __construct(ProjectCategory $model)
    {
        parent::__construct($model);
    }
}
