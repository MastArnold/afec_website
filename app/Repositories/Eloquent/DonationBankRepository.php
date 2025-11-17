<?php

namespace App\Repositories\Eloquent;

use App\Models\DonationBank;
use App\Repositories\Contracts\DonationBankRepositoryInterface;

class DonationBankRepository extends BaseRepository implements DonationBankRepositoryInterface
{
    public function __construct(DonationBank $model)
    {
        parent::__construct($model);
    }
}
