<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ProjectCategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProjectCategoryController extends Controller
{
    public function __construct(private ProjectCategoryRepositoryInterface $categories)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);
        return response()->json($this->categories->paginate($perPage));
    }

    public function show(int $id): JsonResponse
    {
        $item = $this->categories->find($id);
        if (!$item) {
            return response()->json(null, 404);
        }
        return response()->json($item);
    }

    public function store(Request $request): JsonResponse
    {
        $created = $this->categories->create($request->all());
        return response()->json($created, 201);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $updated = $this->categories->update($id, $request->all());
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->categories->delete($id);
        return response()->json(null, 204);
    }
}
