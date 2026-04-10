<?php

namespace App\Repositories\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface NotificationRepositoryInterface extends BaseRepositoryInterface
{
    public function forUser(int $userId, int $perPage = 15): LengthAwarePaginator;
    public function markAsRead(int $id): bool;
    public function markAllAsRead(int $userId): void;
}
