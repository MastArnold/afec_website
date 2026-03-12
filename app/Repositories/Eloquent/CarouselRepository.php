<?php

namespace App\Repositories\Eloquent;

use App\Models\Carousel;
use App\Repositories\Contracts\CarouselRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class CarouselRepository extends BaseRepository implements CarouselRepositoryInterface
{
    public function __construct(Carousel $model)
    {
        parent::__construct($model);
    }

    public function publicOnly(): Collection
    {
        return $this->model->newQuery()->where('is_public', true)->get();
    }

    public function forPagePublic(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->newQuery()->where('is_public', true)->orderByDesc('date')->paginate($perPage);
    }
}
