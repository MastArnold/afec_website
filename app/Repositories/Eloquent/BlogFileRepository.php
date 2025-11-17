<?php

namespace App\Repositories\Eloquent;

use App\Models\BlogFile;
use App\Repositories\Contracts\BlogFileRepositoryInterface;

class BlogFileRepository extends BaseRepository implements BlogFileRepositoryInterface
{
    public function __construct(BlogFile $model)
    {
        parent::__construct($model);
    }
}
