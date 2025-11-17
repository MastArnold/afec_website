<?php

namespace App\Repositories\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface BlogRepositoryInterface extends BaseRepositoryInterface
{
    public function byAuthor(string $author): Collection;

    public function publicOnly(): Collection;

    public function byCategory(int $categoryId): Collection;

    public function forPagePublic(int $perPage = 15): LengthAwarePaginator;
}
