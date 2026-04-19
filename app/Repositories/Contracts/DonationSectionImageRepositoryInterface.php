<?php

namespace App\Repositories\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface DonationSectionImageRepositoryInterface extends BaseRepositoryInterface
{
    public function paginateWithImage(int $perPage = 15): LengthAwarePaginator;
}
