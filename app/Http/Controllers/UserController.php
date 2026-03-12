<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(private UserRepositoryInterface $users)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = (int) $request->query('per_page', 15);
        $search  = $request->query('search');

        return response()->json(
            $this->users->paginateSearch($perPage, $search ?: null)
        );
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role_id'  => 'nullable|exists:user_roles,id',
        ]);

        $data['password'] = Hash::make($data['password']);
        $created = $this->users->create($data);
        $created->load('role');

        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        $user = $this->users->find($id);
        $user?->load('role');
        return response()->json($user);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
            'role_id'  => 'nullable|exists:user_roles,id',
        ]);

        if (empty($data['password'])) {
            unset($data['password']);
        } else {
            $data['password'] = Hash::make($data['password']);
        }

        $this->users->update($id, $data);
        $updated = $this->users->find($id);
        $updated?->load('role');

        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->users->delete($id);
        return response()->json(null, 204);
    }
}
