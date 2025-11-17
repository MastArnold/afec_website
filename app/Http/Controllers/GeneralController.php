<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\GeneralRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class GeneralController extends Controller
{
    public function __construct(private GeneralRepositoryInterface $general)
    {
    }

    public function index(): JsonResponse
    {
        return response()->json($this->general->all());
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        $created = $this->general->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->general->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        $updated = $this->general->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->general->delete($id);
        return response()->json(null, 204);
    }
}
