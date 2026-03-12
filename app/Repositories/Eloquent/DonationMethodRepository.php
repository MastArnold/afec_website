<?php

namespace App\Repositories\Eloquent;

use App\Models\DonationMethod;
use App\Repositories\Contracts\DonationMethodRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class DonationMethodRepository extends BaseRepository implements DonationMethodRepositoryInterface
{
    public function __construct(DonationMethod $model)
    {
        parent::__construct($model);
    }

    public function activeOnly(): Collection
    {
        return $this->model->newQuery()->where('is_active', true)->get();
    }
}
