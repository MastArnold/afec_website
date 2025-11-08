<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    protected $fillable = [
        'type_message',
        'status_message',
        'name',
        'email',
        'subject',
        'message',
        'file',
        'is_read',
        'send_at',
        'read_at',
        'read_by',        
    ];

    use HasFactory;
}
