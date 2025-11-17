<?php

namespace App\Repositories\Eloquent;

use App\Models\ImageCategory;
use App\Repositories\Contracts\ImageCategoryRepositoryInterface;

class ImageCategoryRepository extends BaseRepository implements ImageCategoryRepositoryInterface
{
    public function __construct(ImageCategory $model)
    {
        parent::__construct($model);
    }
}
