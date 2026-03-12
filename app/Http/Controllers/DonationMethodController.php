<?php

namespace App\Http\Controllers;

use App\Http\Resources\DonationMethodResource;
use App\Repositories\Contracts\DonationMethodRepositoryInterface;
use App\Repositories\Contracts\DonationIbanDetailRepositoryInterface;
use App\Repositories\Contracts\DonationMethodStepRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;

class DonationMethodController extends Controller
{
    public function __construct(
        private DonationMethodRepositoryInterface $donationMethods,
        private DonationIbanDetailRepositoryInterface $ibanDetails,
        private DonationMethodStepRepositoryInterface $steps,
    ) {
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        $perPage = $request->query('per_page', 15);
        $methods = $this->donationMethods->paginate($perPage);
        $methods->getCollection()->load('ibanDetails', 'steps');

        return DonationMethodResource::collection($methods);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->except(['steps', 'iban_details']);
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();

        $created = $this->donationMethods->create($data);

        foreach ($request->input('iban_details', []) as $detail) {
            $this->ibanDetails->create([
                'donation_method_id' => $created->id,
                'label' => $detail['label'],
                'detail' => $detail['detail'],
                'created_by' => Auth::id(),
                'updated_by' => Auth::id(),
            ]);
        }

        foreach ($request->input('steps', []) as $step) {
            $this->steps->create([
                'donation_method_id' => $created->id,
                'content' => $step['content'],
            ]);
        }

        $created->load('ibanDetails', 'steps');

        return (new DonationMethodResource($created))
            ->response()
            ->setStatusCode(201);
    }

    public function show(int $id): DonationMethodResource
    {
        $method = $this->donationMethods->find($id);
        $method->load('ibanDetails', 'steps');

        return new DonationMethodResource($method);
    }

    public function update(Request $request, int $id): DonationMethodResource
    {
        $data = $request->except(['steps', 'iban_details']);
        $data['updated_by'] = Auth::id();
        $this->donationMethods->update($id, $data);

        if ($request->has('iban_details')) {
            $method = $this->donationMethods->find($id);
            $method->ibanDetails()->delete();

            foreach ($request->input('iban_details') as $detail) {
                $this->ibanDetails->create([
                    'donation_method_id' => $id,
                    'label' => $detail['label'],
                    'detail' => $detail['detail'],
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id(),
                ]);
            }
        }

        if ($request->has('steps')) {
            $method = $this->donationMethods->find($id);
            $method->steps()->delete();

            foreach ($request->input('steps') as $step) {
                $this->steps->create([
                    'donation_method_id' => $id,
                    'content' => $step['content'],
                ]);
            }
        }

        $updated = $this->donationMethods->find($id);
        $updated->load('ibanDetails', 'steps');

        return new DonationMethodResource($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->donationMethods->delete($id);

        return response()->json(null, 204);
    }
}
