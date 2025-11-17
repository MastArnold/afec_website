<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\AreaIntroRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AreaIntroController extends Controller
{
    public function __construct(private AreaIntroRepositoryInterface $areaIntros)
    {
    }

    public function index(): JsonResponse
    {
        $items = $this->areaIntros->all();
        return response()->json($items);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'intro' => ['required', 'string'],
        ]);

        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();

        $created = $this->areaIntros->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        $item = $this->areaIntros->find($id);
        return response()->json($item);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->validate([
            'title' => ['sometimes', 'required', 'string', 'max:255'],
            'intro' => ['sometimes', 'required', 'string'],
        ]);

        $data['updated_by'] = Auth::id();

        $updated = $this->areaIntros->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->areaIntros->delete($id);
        return response()->json(null, 204);
    }
}
