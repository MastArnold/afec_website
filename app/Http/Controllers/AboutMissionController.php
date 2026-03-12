<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\AboutMissionRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AboutMissionController extends Controller
{
    public function __construct(private AboutMissionRepositoryInterface $mission)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);
        return response()->json($this->mission->paginate($perPage));
    }

    public function store(Request $request): JsonResponse
    {
        //check if it exists one then update it
        $mission = $this->mission->all()->first();
        if ($mission) {
            return $this->update($request, $mission->id);
        }

        $data = $request->all();
        $data['updated_by'] = Auth::id();
        //store the image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'about_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/about', $imageName, 'public');
            
            // Add the image URL to the data
            $data['image'] = asset('storage/' . $path);
        }

        $created = $this->mission->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->mission->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        //store the image
        if ($request->hasFile('image')) {
            //delete the image if it exist
            $about = $this->mission->find($id);
            $imagePath = public_path($about->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        
            $image = $request->file('image');
            $imageName = 'about_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/mission', $imageName, 'public');
            
            // Add the image URL to the data
            $data['image'] = asset('storage/' . $path);
        }

        $updated = $this->mission->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $about = $this->mission->find($id);
        $imagePath = public_path($about->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $this->mission->delete($id);
        return response()->json(null, 204);
    }
}
