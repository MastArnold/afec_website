<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogFile extends Model
{
    //

    protected $fillable = [
        'blog_id',
        'name',
        'title',
        'file',
        'downloadable',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'downloadable' => 'boolean',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
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
