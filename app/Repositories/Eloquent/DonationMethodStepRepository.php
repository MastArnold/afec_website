<?php

namespace App\Repositories\Eloquent;

use App\Models\DonationMethodStep;
use App\Repositories\Contracts\DonationMethodStepRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class DonationMethodStepRepository extends BaseRepository implements DonationMethodStepRepositoryInterface
{
    public function __construct(DonationMethodStep $model)
    {
        parent::__construct($model);
    }

    public function byMethod(int $donationMethodId): Collection
    {
        return $this->model->newQuery()->where('donation_method_id', $donationMethodId)->get();
    }
}
