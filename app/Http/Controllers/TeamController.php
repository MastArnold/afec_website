<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\TeamRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TeamController extends Controller
{
    public function __construct(private TeamRepositoryInterface $teams)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);
        return response()->json($this->teams->paginate($perPage));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        //store image
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = 'team_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/teams', $imageName, 'public');
            
            // Add the image URL to the data
            $data['photo'] = asset('storage/' . $path);
        }

        $created = $this->teams->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->teams->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        //store the image
        if ($request->hasFile('photo')) {
            //delete the current image if it exists
            $team = $this->teams->find($id);
            $imagePath = public_path($team->photo);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $image = $request->file('photo');
            $imageName = 'team_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/teams', $imageName, 'public');
            
            // Add the image URL to the data
            $data['photo'] = asset('storage/' . $path);
        }

        $updated = $this->teams->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        //delete the image if it exists
        $team = $this->teams->find($id);
        $imagePath = public_path($team->photo);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $this->teams->delete($id);
        return response()->json(null, 204);
    }
}
