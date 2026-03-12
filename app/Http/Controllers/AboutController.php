<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\AboutRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AboutController extends Controller
{
    public function __construct(private AboutRepositoryInterface $about)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);
        return response()->json($this->about->paginate($perPage));
    }

    public function store(Request $request): JsonResponse
    {
        //check if it exist one and then update it
        $about = $this->about->all()->first();
        if ($about) {
            return $this->update($request, $about->id);
        }

        $data = $request->all();
        $data['updated_by'] = Auth::id();

        $created = $this->about->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->about->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();

        $updated = $this->about->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $about = $this->about->find($id);
        $imagePath = public_path($about->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $this->about->delete($id);
        return response()->json(null, 204);
    }
}
