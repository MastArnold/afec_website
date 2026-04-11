<?php

namespace App\Repositories\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

interface ProjectRepositoryInterface extends BaseRepositoryInterface
{
    public function forPagePublic(int $perPage = 15): LengthAwarePaginator;
    public function findBySlug(string $slug): ?Model;
    public function generateUniqueSlug(string $title): string;
}
