<?php

namespace App\Repositories\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface CarouselRepositoryInterface extends BaseRepositoryInterface
{
    public function publicOnly(): Collection;

    public function byCategory(string $category): Collection;

    public function forPagePublic(int $perPage = 15): LengthAwarePaginator;
}
