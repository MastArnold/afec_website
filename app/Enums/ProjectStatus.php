<?php

namespace App\Enums;

enum ProjectStatus: string
{
    case Pending    = 'PENDING';
    case InProgress = 'INPROGRESS';
    case Completed  = 'COMPLETED';
    case Cancelled  = 'CANCELLED';
    case Continue   = 'CONTINUE';
}
