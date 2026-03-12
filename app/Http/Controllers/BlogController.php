<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\BlogRepositoryInterface;
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

        $created = $this->blogs->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        $blog = $this->blogs->find($id);

        if (!$blog || (!Auth::guard('sanctum')->check() && !$blog->is_public)) {
            return response()->json(null, 404);
        }

        return response()->json($blog);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        //store the cover
        if ($request->hasFile('cover')) {
            //delete the current cover
            $blog = $this->blogs->find($id);
            $imagePath = public_path($blog->cover);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $image = $request->file('cover');
            $imageName = 'blog_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/blog', $imageName, 'public');
            
            // Add the image URL to the data
            $data['cover'] = asset('storage/' . $path);
        }

        $updated = $this->blogs->update($id, $data);
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
