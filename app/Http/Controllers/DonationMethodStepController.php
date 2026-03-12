<?php

namespace App\Http\Controllers;

use App\Http\Resources\DonationMethodStepResource;
use App\Repositories\Contracts\DonationMethodStepRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DonationMethodStepController extends Controller
{
    public function __construct(private DonationMethodStepRepositoryInterface $steps)
    {
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        $perPage = $request->query('per_page', 15);
        return DonationMethodStepResource::collection($this->steps->paginate($perPage));
    }

    public function store(Request $request): JsonResponse
    {
        $created = $this->steps->create($request->all());

        return (new DonationMethodStepResource($created))
            ->response()
            ->setStatusCode(201);
    }

    public function show(int $id): DonationMethodStepResource
    {
        return new DonationMethodStepResource($this->steps->find($id));
    }

    public function update(Request $request, int $id): DonationMethodStepResource
    {
        $this->steps->update($id, $request->all());

        return new DonationMethodStepResource($this->steps->find($id));
    }

    public function destroy(int $id): JsonResponse
    {
        $this->steps->delete($id);

        return response()->json(null, 204);
    }
}
