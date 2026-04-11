<?php

namespace App\Http\Controllers;

use App\Enums\NotificationEntity;
use App\Repositories\Contracts\ProjectRepositoryInterface;
use App\Services\NotificationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{
    public function __construct(private ProjectRepositoryInterface $projects)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);

        $results = Auth::guard('sanctum')->check()
            ? $this->projects->paginate($perPage)
            : $this->projects->forPagePublic($perPage);

        return response()->json($results);
    }

    public function show(string $project): JsonResponse
    {
        $item = is_numeric($project)
            ? $this->projects->find((int) $project)
            : $this->projects->findBySlug($project);

        if (!$item || (!Auth::guard('sanctum')->check() && !$item->is_public)) {
            return response()->json(null, 404);
        }

        return response()->json($item);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $fileName = 'project_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('data/project', $fileName, 'public');
            $data['cover_path'] = asset('storage/' . $path);
            $data['cover_name'] = $fileName;
            $data['cover_type'] = $file->getMimeType();
        }

        $data['slug'] = $this->projects->generateUniqueSlug($data['title']);

        $created = $this->projects->create($data);

        if (!empty($data['is_public'])) {
            NotificationService::notifyAdmins(
                NotificationEntity::Project,
                $created->id,
                "Nouveau projet publié : {$created->title}",
                Auth::id()
            );
        }

        return response()->json($created, 201);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $current = $this->projects->find($id);
        $data = $request->all();
        $data['updated_by'] = Auth::id();

        if ($request->hasFile('cover')) {
            if ($current->cover_path) {
                $oldPath = public_path($current->cover_path);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $file = $request->file('cover');
            $fileName = 'project_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('data/project', $fileName, 'public');
            $data['cover_path'] = asset('storage/' . $path);
            $data['cover_name'] = $fileName;
            $data['cover_type'] = $file->getMimeType();
        }

        unset($data['slug']);

        $isPublishing = isset($data['is_public']) && !$current->is_public && (bool) $data['is_public'];

        $ignored = ['is_public', 'updated_by', '_method', '_token'];
        $otherFieldsChanged = count(array_diff_key($data, array_flip($ignored))) > 0;

        $updated = $this->projects->update($id, $data);

        if ($isPublishing) {
            NotificationService::notifyAdmins(
                NotificationEntity::Project,
                $id,
                "Nouveau projet publié : {$current->title}",
                Auth::id()
            );
        } elseif ($otherFieldsChanged) {
            NotificationService::notifyAdmins(
                NotificationEntity::Project,
                $id,
                "Projet modifié : {$current->title}",
                Auth::id()
            );
        }

        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $project = $this->projects->find($id);

        if ($project && $project->cover_path) {
            $oldPath = public_path($project->cover_path);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        $this->projects->delete($id);
        return response()->json(null, 204);
    }
}
