<?php

namespace App\Repositories\Eloquent;

use App\Models\Notification;
use App\Repositories\Contracts\NotificationRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class NotificationRepository extends BaseRepository implements NotificationRepositoryInterface
{
    public function __construct(Notification $model)
    {
        parent::__construct($model);
    }

    public function forUser(int $userId, int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->newQuery()
            ->where('user_id', $userId)
            ->orderByDesc('triggered_at')
            ->paginate($perPage);
    }

    public function markAsRead(int $id): bool
    {
        return $this->update($id, ['read' => true]);
    }

    public function markAllAsRead(int $userId): void
    {
        $this->model->newQuery()
            ->where('user_id', $userId)
            ->where('read', false)
            ->update(['read' => true]);
    }
}
