<?php

namespace App\Repositories\Eloquent;

use App\Models\VideoCategory;
use App\Repositories\Contracts\VideoCategoryRepositoryInterface;

class VideoCategoryRepository extends BaseRepository implements VideoCategoryRepositoryInterface
{
    public function __construct(VideoCategory $model)
    {
        parent::__construct($model);
    }
}
