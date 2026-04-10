<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\NotificationRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function __construct(private NotificationRepositoryInterface $notifications)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);
        return response()->json($this->notifications->forUser(Auth::id(), $perPage));
    }

    public function markAsRead(int $id): JsonResponse
    {
        $notification = $this->notifications->find($id);

        if (!$notification || $notification->user_id !== Auth::id()) {
            return response()->json(null, 404);
        }

        $this->notifications->markAsRead($id);
        return response()->json(null, 204);
    }

    public function markAllAsRead(): JsonResponse
    {
        $this->notifications->markAllAsRead(Auth::id());
        return response()->json(null, 204);
    }
}
