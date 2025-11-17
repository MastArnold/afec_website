<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeCarousel extends Model
{
    //

    protected $fillable = [
        'title',
        'cover',
        'cover_name',
        'is_public',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'is_public' => 'boolean',
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
