<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ContactMessageSubjectRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactMessageSubjectController extends Controller
{
    public function __construct(private ContactMessageSubjectRepositoryInterface $subjects)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);
        return response()->json($this->subjects->paginate($perPage));
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->subjects->find($id));
    }

    public function store(Request $request): JsonResponse
    {
        $created = $this->subjects->create($request->all());
        return response()->json($created, 201);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $this->subjects->update($id, $request->only('name'));
        return response()->json($this->subjects->find($id));
    }

    public function reorder(Request $request): JsonResponse
    {
        $items = $request->validate([
            '*.id'    => 'required|integer|exists:contact_message_subjects,id',
            '*.order' => 'required|integer|min:0',
        ]);

        foreach ($items as $item) {
            $this->subjects->update($item['id'], ['order' => $item['order']]);
        }

        return response()->json(null, 204);
    }

    public function toggleActive(int $id): JsonResponse
    {
        $subject = $this->subjects->find($id);

        if (!$subject) {
            return response()->json(null, 404);
        }

        $this->subjects->update($id, ['is_active' => !$subject->is_active]);
        return response()->json($this->subjects->find($id));
    }

    public function destroy(int $id): JsonResponse
    {
        $this->subjects->delete($id);
        return response()->json(null, 204);
    }
}
