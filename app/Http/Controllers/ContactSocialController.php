<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ContactSocialRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ContactSocialController extends Controller
{
    public function __construct(private ContactSocialRepositoryInterface $contactSocials)
    {
    }

    public function index(): JsonResponse
    {
        return response()->json($this->contactSocials->all());
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        $created = $this->contactSocials->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->contactSocials->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        $updated = $this->contactSocials->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->contactSocials->delete($id);
        return response()->json(null, 204);
    }
}
