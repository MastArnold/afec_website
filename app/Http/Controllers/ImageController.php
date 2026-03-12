<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ImageRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ImageController extends Controller
{
    public function __construct(private ImageRepositoryInterface $images)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);
        return response()->json($this->images->paginate($perPage));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        $data['date'] = now();
        //store the image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'image_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/images', $imageName, 'public');
            
            // Add the image URL to the data
            $data['image'] = asset('storage/' . $path);
        }

        $created = $this->images->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->images->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        $updated = $this->images->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        //delete image
        $image = $this->images->find($id);
        $imagePath = public_path($image->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $this->images->delete($id);
        return response()->json(null, 204);
    }
}
