<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\DonationSectionRepositoryInterface;
use App\Repositories\Contracts\DonationSectionImageRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class DonationSectionController extends Controller
{
    public function __construct(
        private DonationSectionRepositoryInterface $section,
        private DonationSectionImageRepositoryInterface $images,
    ) {
    }

    public function show(): JsonResponse
    {
        return response()->json($this->section->firstOrCreate());
    }

    public function update(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();

        $section = $this->section->firstOrCreate();
        $this->section->update($section->id, $data);

        return response()->json($this->section->first());
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15);
        return response()->json($this->images->paginateWithImage($perPage));
    }

    public function store(Request $request): JsonResponse
    {
        $image = $this->images->create($request->all());
        return response()->json($image, 201);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->images->delete($id);
        return response()->json(null, 204);
    }
}
