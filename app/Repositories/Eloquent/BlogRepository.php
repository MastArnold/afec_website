<?php

namespace App\Repositories\Eloquent;

use App\Models\Blog;
use App\Repositories\Contracts\BlogRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{
    public function __construct(Blog $model)
    {
        parent::__construct($model);
    }

    public function byAuthor(string $author): Collection
    {
        return $this->model->newQuery()->where('author', $author)->get();
    }

    public function publicOnly(): Collection
    {
        return $this->model->newQuery()->where('is_public', true)->get();
    }

    public function byCategory(int $categoryId): Collection
    {
        return $this->model->newQuery()->where('category_id', $categoryId)->get();
    }

    public function forPagePublic(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->newQuery()->where('is_public', true)->orderByDesc('date')->paginate($perPage);
    }
}
