<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;

interface DonationSectionRepositoryInterface extends BaseRepositoryInterface
{
    public function first(): ?Model;
}
