<?php

namespace App\Repositories\Eloquent;

use App\Models\ContactMessageSubject;
use App\Repositories\Contracts\ContactMessageSubjectRepositoryInterface;

class ContactMessageSubjectRepository extends BaseRepository implements ContactMessageSubjectRepositoryInterface
{
    public function __construct(ContactMessageSubject $model)
    {
        parent::__construct($model);
    }
}
