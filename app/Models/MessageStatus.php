<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageStatus extends Model
{
    protected $table = 'message_status';
    protected $fillable = [
        'name'
    ];

    use HasFactory;
}
