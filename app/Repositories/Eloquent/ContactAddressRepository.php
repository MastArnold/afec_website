<?php

namespace App\Repositories\Eloquent;

use App\Models\ContactAddress;
use App\Repositories\Contracts\ContactAddressRepositoryInterface;

class ContactAddressRepository extends BaseRepository implements ContactAddressRepositoryInterface
{
    public function __construct(ContactAddress $model)
    {
        parent::__construct($model);
    }
}
