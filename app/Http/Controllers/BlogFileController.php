<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\BlogFileRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BlogFileController extends Controller
{
    public function __construct(private BlogFileRepositoryInterface $blogFiles)
    {
    }

    public function index(): JsonResponse
    {
        return response()->json($this->blogFiles->all());
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        $created = $this->blogFiles->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->blogFiles->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        $updated = $this->blogFiles->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->blogFiles->delete($id);
        return response()->json(null, 204);
    }
}
