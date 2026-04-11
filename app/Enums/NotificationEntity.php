<?php

namespace App\Enums;

enum NotificationEntity: string
{
    case Blog    = 'blog';
    case Image   = 'image';
    case Video   = 'video';
    case Message = 'message';
    case Project = 'project';
}
