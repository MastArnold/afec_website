<?php

namespace App\Repositories\Eloquent;

use App\Models\UserRole;
use App\Repositories\Contracts\UserRoleRepositoryInterface;

class UserRoleRepository extends BaseRepository implements UserRoleRepositoryInterface
{
    public function __construct(UserRole $model)
    {
        parent::__construct($model);
    }
}
