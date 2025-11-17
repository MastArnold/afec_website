<?php

namespace App\Repositories\Eloquent;

use App\Models\HomeCarousel;
use App\Repositories\Contracts\HomeCarouselRepositoryInterface;

class HomeCarouselRepository extends BaseRepository implements HomeCarouselRepositoryInterface
{
    public function __construct(HomeCarousel $model)
    {
        parent::__construct($model);
    }
}
