<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageAnswer extends Model
{
    protected $table = 'message_answer';
    protected $fillable = [
        'message_id',
        'message',
        'date'
    ];

    use HasFactory;
}
