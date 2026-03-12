<?php

namespace App\Repositories\Eloquent;

use App\Models\DonationIbanDetail;
use App\Repositories\Contracts\DonationIbanDetailRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class DonationIbanDetailRepository extends BaseRepository implements DonationIbanDetailRepositoryInterface
{
    public function __construct(DonationIbanDetail $model)
    {
        parent::__construct($model);
    }

    public function byMethod(int $donationMethodId): Collection
    {
        return $this->model->newQuery()->where('donation_method_id', $donationMethodId)->get();
    }
}
