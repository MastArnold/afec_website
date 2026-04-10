<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    protected $fillable = [
        'cover',
        'author',
        'date',
        'planned_date',
        'title',
        'slug',
        'content',
        'is_public',
        'is_featured',
        'category_id',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'date' => 'datetime',
        'is_public' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function files()
    {
        return $this->hasMany(BlogFile::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
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
