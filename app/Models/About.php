<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //

    protected $fillable = [
        'introduction',
        'cover_1',
        'cover_2',
        'cover_3',
        'cover_4',
        'mission',
        'transition_image',
        'created_by',
        'updated_by',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
