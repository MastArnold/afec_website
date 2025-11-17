<?php

namespace App\Repositories\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface VideoRepositoryInterface extends BaseRepositoryInterface
{
    public function publicOnly(): Collection;

    public function byCategory(int $categoryId): Collection;

    public function forBlog(int $blogId): Collection;

    public function forPagePublic(int $perPage = 15): LengthAwarePaginator;
}
