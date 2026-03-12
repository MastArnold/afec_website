<?php

namespace App\Http\Controllers;

use App\Http\Resources\VideoResource;
use App\Repositories\Contracts\VideoRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class VideoController extends Controller
{
    public function __construct(private VideoRepositoryInterface $videos)
    {
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        $per_page = $request->query('per_page', 10);
        return VideoResource::collection($this->videos->paginate($per_page));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        //store video
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = 'video_' . time() . '.' . $video->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $video->storeAs('data/videos', $videoName, 'public');
            
            // Add the image URL to the data
            $data['url'] = asset('storage/' . $path);
        }

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = 'video_thumbnail_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/thumbnails', $imageName, 'public');
            
            // Add the image URL to the data
            $data['thumbnail'] = asset('storage/' . $path);
        }

        $created = $this->videos->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->videos->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        if ($request->hasFile('video')) {

            //delete the current image
            $video = $this->videos->find($id);
            $videoPath = public_path($video->url);
            if (file_exists($videoPath)) {
                unlink($videoPath);
            }

            $video = $request->file('video');
            $videoName = 'video_' . time() . '.' . $video->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $video->storeAs('data/videos', $videoName, 'public');
            
            // Add the image URL to the data
            $data['url'] = asset('storage/' . $path);
        }

        if ($request->hasFile('thumbnail')) {
            //delete the current image
            $image = $this->videos->find($id);
            $imagePath = public_path($image->thumbnail);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $image = $request->file('thumbnail');
            $imageName = 'video_thumbnail_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/thumbnails', $imageName, 'public');
            
            // Add the image URL to the data
            $data['thumbnail'] = asset('storage/' . $path);
        }

        $updated = $this->videos->update($id, $data);
        return response()->json($updated);
    }

    public function patchActivate(int $id): JsonResponse
    {
        $video = $this->videos->find($id);
        if($video){
            $video->is_active = true;
            $video->save();
            return response()->json($video);
        }

        return response()->json(null, 404);
    }

    public function patchUnactivate(int $id): JsonResponse
    {
        $video = $this->videos->find($id);
        if($video){
            $video->is_active = false;
            $video->save();
            return response()->json($video);
        }

        return response()->json(null, 404);
    }

    public function destroy(int $id): JsonResponse
    {
        $video = $this->videos->find($id);
        $videoPath = public_path($video->url);
        if (file_exists($videoPath)) {
            unlink($videoPath);
        }

        $thumbnailPath = public_path($video->thumbnail);
        if (file_exists($thumbnailPath)) {
            unlink($thumbnailPath);
        }

        $this->videos->delete($id);
        return response()->json(null, 204);
    }
}
