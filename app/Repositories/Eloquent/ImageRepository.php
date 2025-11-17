<?php

namespace App\Repositories\Eloquent;

use App\Models\Image;
use App\Repositories\Contracts\ImageRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ImageRepository extends BaseRepository implements ImageRepositoryInterface
{
    public function __construct(Image $model)
    {
        parent::__construct($model);
    }

    public function publicOnly(): Collection
    {
        return $this->model->newQuery()->where('is_public', true)->get();
    }

    public function byCategory(int $categoryId): Collection
    {
        return $this->model->newQuery()->where('category_id', $categoryId)->get();
    }

    public function forBlog(int $blogId): Collection
    {
        return $this->model->newQuery()->where('blog_id', $blogId)->get();
    }

    public function latest(int $limit = 10): Collection
    {
        return $this->model->newQuery()->orderByDesc('date')->limit($limit)->get();
    }

    public function forPagePublic(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->newQuery()->where('is_public', true)->orderByDesc('date')->paginate($perPage);
    }
}
