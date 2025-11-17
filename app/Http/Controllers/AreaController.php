<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\AreaRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AreaController extends Controller
{
    public function __construct(private AreaRepositoryInterface $areas)
    {
    }

    public function index(): JsonResponse
    {
        $items = $this->areas->all();
        return response()->json($items);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'is_public' => ['sometimes', 'boolean'],
        ]);

        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();

        $created = $this->areas->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        $item = $this->areas->find($id);
        return response()->json($item);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->validate([
            'title' => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['sometimes', 'nullable', 'string'],
            'is_public' => ['sometimes', 'boolean'],
        ]);

        $data['updated_by'] = Auth::id();

        $updated = $this->areas->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->areas->delete($id);
        return response()->json(null, 204);
    }
}
