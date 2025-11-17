<?php

namespace App\Repositories\Eloquent;

use App\Models\Video;
use App\Repositories\Contracts\VideoRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class VideoRepository extends BaseRepository implements VideoRepositoryInterface
{
    public function __construct(Video $model)
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

    public function forPagePublic(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->newQuery()->where('is_public', true)->orderByDesc('date')->paginate($perPage);
    }
}
