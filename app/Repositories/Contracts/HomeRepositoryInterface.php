<?php

namespace App\Repositories\Contracts;

use App\Models\Home;

interface HomeRepositoryInterface extends BaseRepositoryInterface
{
    public function activeOnly(): Home;
    public function unactiveCurrent(): bool;
}
