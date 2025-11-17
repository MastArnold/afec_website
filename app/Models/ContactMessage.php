<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    //

    protected $fillable = [
        'sender_name',
        'sender_phone',
        'sender_mail',
        'subject',
        'message',
        'file',
        'seen',
        'seen_by',
        'is_active',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'seen' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function seenBy()
    {
        return $this->belongsTo(User::class, 'seen_by');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
