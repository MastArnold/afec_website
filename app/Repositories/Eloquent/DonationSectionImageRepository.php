<?php

namespace App\Repositories\Eloquent;

use App\Models\DonationSectionImage;
use App\Repositories\Contracts\DonationSectionImageRepositoryInterface;

class DonationSectionImageRepository extends BaseRepository implements DonationSectionImageRepositoryInterface
{
    public function __construct(DonationSectionImage $model)
    {
        parent::__construct($model);
    }
}
