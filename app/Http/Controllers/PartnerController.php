<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\PartnerRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PartnerController extends Controller
{
    public function __construct(private PartnerRepositoryInterface $partners)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);
        return response()->json($this->partners->paginate($perPage));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        //store the logo
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = 'partner_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/partners', $imageName, 'public');
            
            // Add the image URL to the data
            $data['logo'] = asset('storage/' . $path);
        }
        
        $created = $this->partners->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->partners->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        //store the logo
        if ($request->hasFile('logo')) {
            //delete the current image if it exists
            $image = $this->partners->find($id);
            $imagePath = public_path($image->logo);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        
            $image = $request->file('logo');
            $imageName = 'partner_' . time() . '.' . $image->getClientOriginalExtension();
            
            // Store the image in the public/storage/data/gallery directory
            $path = $image->storeAs('data/partners', $imageName, 'public');
            
            // Add the image URL to the data
            $data['logo'] = asset('storage/' . $path);
        }

        $updated = $this->partners->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        //delete the image if it exists
        $partner = $this->partners->find($id);
        $imagePath = public_path($partner->logo);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $this->partners->delete($id);
        return response()->json(null, 204);
    }
}
