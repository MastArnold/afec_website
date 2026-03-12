<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface DonationMethodRepositoryInterface extends BaseRepositoryInterface
{
    public function activeOnly(): Collection;
}
