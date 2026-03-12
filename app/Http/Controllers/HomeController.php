<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\HomeRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    public function __construct(private HomeRepositoryInterface $homes)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);
        return response()->json($this->homes->paginate($perPage));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        //store the image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'theme_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/themes', $imageName, 'public');
            
            // Add the image URL to the data
            $data['image'] = asset('storage/' . $path);
        }


        $created = $this->homes->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->homes->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        if ($request->hasFile('image')) {

            //delete the current image
            $home = $this->homes->find($id);
            $imagePath = public_path($home->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $image = $request->file('image');
            $imageName = 'theme_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/themes', $imageName, 'public');
            
            // Add the image URL to the data
            $data['image'] = asset('storage/' . $path);
        }

        $updated = $this->homes->update($id, $data);
        return response()->json($updated);
    }

    public function patchActive(int $id): JsonResponse
    {
        $home = $this->homes->find($id);
        if($home){
            $this->homes->unactiveCurrent();
            $home->is_active = true;
            $home->save();
            return response()->json($home);
        }

        return response()->json(null, 404);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->homes->delete($id);
        return response()->json(null, 204);
    }
}
