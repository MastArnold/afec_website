<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\DonationBankRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DonationBankController extends Controller
{
    public function __construct(private DonationBankRepositoryInterface $donationBanks)
    {
    }

    public function index(): JsonResponse
    {
        return response()->json($this->donationBanks->all());
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();
        $created = $this->donationBanks->create($data);
        return response()->json($created, 201);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->donationBanks->find($id));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        $data['updated_by'] = Auth::id();
        $updated = $this->donationBanks->update($id, $data);
        return response()->json($updated);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->donationBanks->delete($id);
        return response()->json(null, 204);
    }
}
