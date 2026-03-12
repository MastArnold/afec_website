<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRoleRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserRoleController extends Controller
{
    public function __construct(private UserRoleRepositoryInterface $roles)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);
        return response()->json($this->roles->paginate($perPage));
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate(['name' => 'required|string|max:255|unique:user_roles,name']);
        $created = $this->roles->create($request->only('name'));
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->roles->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $request->validate(['name' => 'required|string|max:255|unique:user_roles,name,' . $id]);
        $this->roles->update($id, $request->only('name'));
        return response()->json($this->roles->find($id));
    }

    public function destroy(int $id): JsonResponse
    {
        $this->roles->delete($id);
        return response()->json(null, 204);
    }
}
