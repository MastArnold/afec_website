<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';

    protected $fillable = [
        'user_id',
        'title',
        'entity',
        'entity_id',
        'triggered_at',
        'triggered_by',
        'read'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function triggeredBy()
    {
        return $this->belongsTo(User::class, 'triggered_by');
    }
}
