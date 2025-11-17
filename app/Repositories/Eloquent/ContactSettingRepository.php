<?php

namespace App\Repositories\Eloquent;

use App\Models\ContactSetting;
use App\Repositories\Contracts\ContactSettingRepositoryInterface;

class ContactSettingRepository extends BaseRepository implements ContactSettingRepositoryInterface
{
    public function __construct(ContactSetting $model)
    {
        parent::__construct($model);
    }
}
