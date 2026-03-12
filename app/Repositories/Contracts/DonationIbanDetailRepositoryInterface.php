<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface DonationIbanDetailRepositoryInterface extends BaseRepositoryInterface
{
    public function byMethod(int $donationMethodId): Collection;
}
