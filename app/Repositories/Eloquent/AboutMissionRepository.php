<?php

namespace App\Repositories\Eloquent;

use App\Models\AboutMission;
use App\Repositories\Contracts\AboutMissionRepositoryInterface;

class AboutMissionRepository extends BaseRepository implements AboutMissionRepositoryInterface
{
    public function __construct(AboutMission $model)
    {
        parent::__construct($model);
    }
}
