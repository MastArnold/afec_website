<?php

namespace App\Repositories\Eloquent;

use App\Models\Donation;
use App\Repositories\Contracts\DonationRepositoryInterface;

class DonationRepository extends BaseRepository implements DonationRepositoryInterface
{
    public function __construct(Donation $model)
    {
        parent::__construct($model);
    }
}
