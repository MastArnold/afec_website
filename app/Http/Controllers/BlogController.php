<?php

namespace App\Http\Controllers;

use App\Enums\NotificationEntity;
use App\Repositories\Contracts\BlogRepositoryInterface;
use App\Services\NotificationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    public function __construct(private BlogRepositoryInterface $blogs)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);

        $results = Auth::guard('sanctum')->check()
            ? $this->blogs->paginate($perPage)
            : $this->blogs->forPagePublic($perPage);

        return response()->json($results);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        //store the cover
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $imageName = 'blog_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/blog', $imageName, 'public');
            
            // Add the image URL to the data
            $data['cover'] = asset('storage/' . $path);
        }

        //store files
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            $fileNames = [];
            foreach ($files as $file) {
                $fileName = 'blog_file_' . time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('data/blog_file', $fileName, 'public');
                $fileNames[] = asset('storage/' . $path);
            }
            $data['files'] = $fileNames;
        }

        $data['slug'] = $this->blogs->generateUniqueSlug($data['title']);

        $created = $this->blogs->create($data);

        if (!empty($data['is_public'])) {
            NotificationService::notifyAdmins(
                NotificationEntity::Blog,
                $created->id,
                "Nouvel article publié : {$created->title}",
                Auth::id()
            );
        }

        return response()->json($created, 201);
    }

    public function show(string $blog): JsonResponse
    {
        $item = is_numeric($blog)
            ? $this->blogs->find((int) $blog)
            : $this->blogs->findBySlug($blog);

        if (!$item || (!Auth::guard('sanctum')->check() && !$item->is_public)) {
            return response()->json(null, 404);
        }

        return response()->json($item);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $current = $this->blogs->find($id);
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        //store the cover
        if ($request->hasFile('cover')) {
            //delete the current cover
            $imagePath = public_path($current->cover);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $image = $request->file('cover');
            $imageName = 'blog_' . time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('data/blog', $imageName, 'public');
            $data['cover'] = asset('storage/' . $path);
        }

        $updated = $this->blogs->update($id, $data);

        $isPublishing = isset($data['is_public']) && !$current->is_public && (bool) $data['is_public'];
        unset($data['slug']); // le slug est immuable après création

        $ignored = ['is_public', 'updated_by', '_method', '_token'];
        $otherFieldsChanged = count(array_diff_key($data, array_flip($ignored))) > 0;

        if ($isPublishing) {
            NotificationService::notifyAdmins(
                NotificationEntity::Blog,
                $id,
                "Nouvel article publié : {$current->title}",
                Auth::id()
            );
        } elseif ($otherFieldsChanged) {
            NotificationService::notifyAdmins(
                NotificationEntity::Blog,
                $id,
                "Article modifié : {$current->title}",
                Auth::id()
            );
        }

        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        //delete the image
        $blog = $this->blogs->find($id);
        $imagePath = public_path($blog->cover);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $this->blogs->delete($id);
        return response()->json(null, 204);
    }
}
