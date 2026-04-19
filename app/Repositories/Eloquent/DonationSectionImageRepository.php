<?php

namespace App\Repositories\Eloquent;

use App\Models\DonationSectionImage;
use App\Repositories\Contracts\DonationSectionImageRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class DonationSectionImageRepository extends BaseRepository implements DonationSectionImageRepositoryInterface
{
    public function __construct(DonationSectionImage $model)
    {
        parent::__construct($model);
    }

    public function paginateWithImage(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->newQuery()->with('image')->paginate($perPage);
    }
}
