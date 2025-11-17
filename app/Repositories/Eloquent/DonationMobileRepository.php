<?php

namespace App\Repositories\Eloquent;

use App\Models\DonationMobile;
use App\Repositories\Contracts\DonationMobileRepositoryInterface;

class DonationMobileRepository extends BaseRepository implements DonationMobileRepositoryInterface
{
    public function __construct(DonationMobile $model)
    {
        parent::__construct($model);
    }
}
