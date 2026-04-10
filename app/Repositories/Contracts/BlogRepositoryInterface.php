<?php

namespace App\Repositories\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BlogRepositoryInterface extends BaseRepositoryInterface
{
    public function byAuthor(string $author): Collection;

    public function publicOnly(): Collection;

    public function byCategory(int $categoryId): Collection;

    public function forPagePublic(int $perPage = 15): LengthAwarePaginator;

    public function findBySlug(string $slug): ?Model;

    public function generateUniqueSlug(string $title): string;
}
