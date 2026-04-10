<?php

namespace App\Http\Controllers;

use App\Enums\NotificationEntity;
use App\Repositories\Contracts\ContactMessageRepositoryInterface;
use App\Services\NotificationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ContactMessageController extends Controller
{
    public function __construct(private ContactMessageRepositoryInterface $contactMessages)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $per_page = $request->query('per_page', 10);
        return response()->json($this->contactMessages->paginate($per_page));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        //store file if exists
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = 'message_file_' . time() . '.' . $file->getClientOriginalExtension();
            
            $path = $file->storeAs('data/message_files', $fileName, 'public');
            
            $data['file'] = asset('storage/' . $path);
        }

        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        $created = $this->contactMessages->create($data);

        NotificationService::notifyAdmins(
            NotificationEntity::Message,
            $created->id,
            "Nouveau message de : {$created->name}",
        );

        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->contactMessages->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        if ($request->hasFile('file')) {
            $message = $this->contactMessages->find($id);
            $filePath = public_path($message->file);
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $file = $request->file('file');
            $fileName = 'message_file_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('data/message_files', $fileName, 'public');
            $data['file'] = asset('storage/' . $path);
        }

        $updated = $this->contactMessages->update($id, $data);
        return response()->json($updated);
    }

    public function patchSeen(int $id): JsonResponse
    {
        $data['seen_by'] = Auth::id();
        $data['seen'] = true;
        $updated = $this->contactMessages->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->contactMessages->delete($id);
        return response()->json(null, 204);
    }
}
