<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Repositories\Contracts\BlogRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    public function __construct(private BlogRepositoryInterface $blogs)
    {
    }

    public function index(Request $request)
    {
        $size = $request->query('per_page', 10);
        return response()->json(Blog::paginate($size));
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
        return response()->json($this->blogs->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        $updated = $this->blogs->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->blogs->delete($id);
        return response()->json(null, 204);
    }
}
