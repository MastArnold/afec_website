<?php

namespace App\Http\Controllers;

use App\Http\Resources\DonationIbanDetailResource;
use App\Repositories\Contracts\DonationIbanDetailRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;

class DonationIbanDetailController extends Controller
{
    public function __construct(private DonationIbanDetailRepositoryInterface $ibanDetails)
    {
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        $perPage = $request->query('per_page', 15);
        return DonationIbanDetailResource::collection($this->ibanDetails->paginate($perPage));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();

        $created = $this->ibanDetails->create($data);

        return (new DonationIbanDetailResource($created))
            ->response()
            ->setStatusCode(201);
    }

    public function show(int $id): DonationIbanDetailResource
    {
        return new DonationIbanDetailResource($this->ibanDetails->find($id));
    }

    public function update(Request $request, int $id): DonationIbanDetailResource
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        $this->ibanDetails->update($id, $data);

        return new DonationIbanDetailResource($this->ibanDetails->find($id));
    }

    public function destroy(int $id): JsonResponse
    {
        $this->ibanDetails->delete($id);

        return response()->json(null, 204);
    }
}
