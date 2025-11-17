<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //

    protected $fillable = [
        'blog_id',
        'title',
        'description',
        'url',
        'date',
        'category_id',
        'is_public',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'date' => 'datetime',
        'is_public' => 'boolean',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function category()
    {
        return $this->belongsTo(VideoCategory::class, 'category_id');
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
