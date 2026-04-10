<?php

namespace App\Services;

use App\Enums\NotificationEntity;
use App\Models\Notification;
use App\Models\User;

class NotificationService
{
    /**
     * Envoie une notification à tous les admins et superadmins.
     */
    public static function notifyAdmins(
        NotificationEntity $entity,
        int $entityId,
        string $title,
        ?int $triggeredBy = null
    ): void {
        $admins = User::whereIn('role_id', [1, 2])->get();

        foreach ($admins as $admin) {
            Notification::create([
                'user_id'      => $admin->id,
                'title'        => $title,
                'entity'       => $entity->value,
                'entity_id'    => $entityId,
                'triggered_at' => now(),
                'triggered_by' => $triggeredBy,
                'read'         => false,
            ]);
        }
    }
}
