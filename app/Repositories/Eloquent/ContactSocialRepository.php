<?php

namespace App\Repositories\Eloquent;

use App\Models\ContactSocial;
use App\Repositories\Contracts\ContactSocialRepositoryInterface;

class ContactSocialRepository extends BaseRepository implements ContactSocialRepositoryInterface
{
    public function __construct(ContactSocial $model)
    {
        parent::__construct($model);
    }
}
