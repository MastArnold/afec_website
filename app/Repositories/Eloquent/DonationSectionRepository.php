<?php

namespace App\Repositories\Eloquent;

use App\Models\DonationSection;
use App\Repositories\Contracts\DonationSectionRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class DonationSectionRepository extends BaseRepository implements DonationSectionRepositoryInterface
{
    public function __construct(DonationSection $model)
    {
        parent::__construct($model);
    }

    public function first(): ?Model
    {
        return $this->model->newQuery()->first();
    }

    public function firstOrCreate(): Model
    {
        return $this->model->newQuery()->firstOrCreate([], [
            'title'     => '',
            'subtitle'  => '',
            'content'   => '',
            'is_active' => true,
        ]);
    }
}
